<?php
/**
 * API pour sauvegarder les commentaires de blog
 */

$post = $_POST['post'] ?? null;
$comment = trim($_POST['comment'] ?? '');

if (!$post || $comment === '') die("Erreur");

$file = __DIR__ . "/../data/comments_" . $post . ".json";

$comments = file_exists($file)
    ? json_decode(file_get_contents($file), true)
    : [];

$comments[] = $comment;

file_put_contents($file, json_encode($comments, JSON_PRETTY_PRINT));

header("Location: " . (isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '../articles.php?post=' . $post));
exit;
