async function loadArticle() {
  const params = new URLSearchParams(window.location.search);
  const slug = params.get('post');

  const res = await fetch('./data/blog.json');
  const articles = await res.json();

  const article = articles.find((a) => a.slug === slug);

  if (!article) return;

  document.querySelector('.article-title').textContent = article.title;

  document.querySelector('#hero-article').style.backgroundImage = `url('${article.image}')`;

  document.querySelector('#article-content').innerHTML = article.content;
}

loadArticle();
