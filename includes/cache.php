<?php

/**
 * Système de cache pour améliorer les performances du site
 * Cache les pages statiques pour réduire la charge serveur
 */

class Cache {
    
    private $cacheDir;
    private $cacheTime;
    
    /**
     * Constructeur
     * @param int $cacheTime Durée de vie du cache en secondes (par défaut 1 heure)
     */
    public function __construct($cacheTime = 3600) {
        $this->cacheDir = __DIR__ . '/../cache/';
        $this->cacheTime = $cacheTime;
        
        // Créer le dossier cache s'il n'existe pas
        if (!is_dir($this->cacheDir)) {
            mkdir($this->cacheDir, 0755, true);
        }
    }
    
    /**
     * Génère une clé de cache unique basée sur l'URL
     * @param string $page Nom de la page
     * @return string Clé de cache
     */
    private function getCacheKey($page) {
        // Inclure les paramètres GET dans la clé si nécessaire
        $params = $_GET;
        ksort($params);
        $queryString = http_build_query($params);
        $key = $page . ($queryString ? '_' . md5($queryString) : '');
        return md5($key) . '.html';
    }
    
    /**
     * Vérifie si une page est en cache et valide
     * @param string $page Nom de la page
     * @return bool|string Contenu du cache ou false si inexistant/expiré
     */
    public function get($page) {
        $cacheFile = $this->cacheDir . $this->getCacheKey($page);
        
        // Vérifier si le fichier existe et n'est pas expiré
        if (file_exists($cacheFile)) {
            $fileTime = filemtime($cacheFile);
            if (time() - $fileTime < $this->cacheTime) {
                return file_get_contents($cacheFile);
            }
            // Cache expiré, supprimer le fichier
            unlink($cacheFile);
        }
        
        return false;
    }
    
    /**
     * Sauvegarde le contenu dans le cache
     * @param string $page Nom de la page
     * @param string $content Contenu à mettre en cache
     * @return bool Succès de l'opération
     */
    public function set($page, $content) {
        $cacheFile = $this->cacheDir . $this->getCacheKey($page);
        return file_put_contents($cacheFile, $content) !== false;
    }
    
    /**
     * Vérifie si une page doit être mise en cache
     * @param string $page Nom de la page
     * @return bool True si la page peut être mise en cache
     */
    public function shouldCache($page) {
        // Pages à ne PAS mettre en cache (formulaires, pages dynamiques)
        $noCachePages = [
            'devis',
            'articles',
            'gestion-cookies',
            '404',
            '500'
        ];
        
        // Ne pas mettre en cache les requêtes POST
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            return false;
        }
        
        // Ne pas mettre en cache si c'est une page exclue
        return !in_array($page, $noCachePages);
    }
    
    /**
     * Vide tout le cache
     * @return int Nombre de fichiers supprimés
     */
    public function clear() {
        $count = 0;
        if (is_dir($this->cacheDir)) {
            $files = glob($this->cacheDir . '*.html');
            foreach ($files as $file) {
                if (is_file($file)) {
                    unlink($file);
                    $count++;
                }
            }
        }
        return $count;
    }
    
    /**
     * Vide le cache d'une page spécifique
     * @param string $page Nom de la page
     * @return bool Succès de l'opération
     */
    public function clearPage($page) {
        $cacheFile = $this->cacheDir . $this->getCacheKey($page);
        if (file_exists($cacheFile)) {
            return unlink($cacheFile);
        }
        return false;
    }
    
    /**
     * Obtient les statistiques du cache
     * @return array Statistiques (taille totale, nombre de fichiers, etc.)
     */
    public function getStats() {
        $stats = [
            'files' => 0,
            'size' => 0,
            'oldest' => null,
            'newest' => null
        ];
        
        if (is_dir($this->cacheDir)) {
            $files = glob($this->cacheDir . '*.html');
            $stats['files'] = count($files);
            
            foreach ($files as $file) {
                $stats['size'] += filesize($file);
                $mtime = filemtime($file);
                
                if ($stats['oldest'] === null || $mtime < $stats['oldest']) {
                    $stats['oldest'] = $mtime;
                }
                if ($stats['newest'] === null || $mtime > $stats['newest']) {
                    $stats['newest'] = $mtime;
                }
            }
        }
        
        return $stats;
    }
}
