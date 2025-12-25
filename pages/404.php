<section class="error-404">
  <div class="error-box">
    <h1>404</h1>
    <h2>Page introuvable</h2>
    <p>
      La page que vous cherchez n’existe pas ou a été déplacée.
    </p>

    <div class="error-actions">
      <a href="/debarenov/" class="btn btn-primary">Retour à l’accueil</a>
      <a href="/debarenov/debarras" class="btn btn-blue">Nos services</a>
    </div>
  </div>
</section>

<style>
.error-404 {
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background: #f6f6f6;
}

.error-box {
  text-align: center;
  background: #fff;
  padding: 60px 40px;
  border-radius: 14px;
  box-shadow: 0 20px 40px rgba(0,0,0,.08);
  max-width: 520px;
  width: 100%;
}

.error-box h1 {
  font-size: 96px;
  font-weight: 800;
  margin: 0;
  color: #111;
}

.error-box h2 {
  font-size: 26px;
  margin: 10px 0 15px;
}

.error-box p {
  color: #555;
  margin-bottom: 30px;
}

.error-actions {
  display: flex;
  gap: 15px;
  justify-content: center;
}

.btn {
  padding: 12px 22px;
  border-radius: 6px;
  font-weight: 600;
  text-decoration: none;
  transition: all .2s ease;
}

.btn-primary {
  background: #111;
  color: #fff;
}

.btn-primary:hover {
  background: #000;
}

.btn-blue {
  background: #1f5fff;
  color: #fff;
}

.btn-blue:hover {
  background: #1749cc;
}
</style>
