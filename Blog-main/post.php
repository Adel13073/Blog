<?php 
  include_once("templates/header.php"); // Carrega o topo e o array $posts

  // Verifica se o ID foi passado na URL[cite: 3]
  if (isset($_GET['id'])) {
      $postId = $_GET['id'];
      $currentPost = null;

      // Busca a receita correspondente ao ID[cite: 3]
      foreach ($posts as $post) {
          if ($post['id'] == $postId) {
              $currentPost = $post;
              break;
          }
      }
  }
?>

<main id="post-container">
    <?php if (isset($currentPost)): ?>
        <div class="content-container">
            <h1 id="main-title"><?= $currentPost['title'] ?></h1>
            <p id="post-description"><?= $currentPost['description'] ?></p>
            
            <div class="img-container">
                <img src="<?= BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
            </div>

            <h2 style="font-family: 'Gabriela', serif; color: #B85C4C; margin: 25px 0 15px 0;">Modo de Preparo</h2>
            
            <div class="post-content">
                <ol style="padding-left: 20px; line-height: 1.8;">
                    <!-- Percorre e exibe cada passo do preparo da receita atual -->
                    <?php foreach ($currentPost['preparo'] as $passo): ?>
                        <li style="margin-bottom: 10px;"><?= $passo ?></li>
                    <?php endforeach; ?>
                </ol>
            </div>
        </div>

       <!-- Barra Lateral Adaptada para Ingredientes da Receita Atual -->
     <aside id="nav-container">
    <h3 id="tags-title">Ingredientes</h3>
    <ul id="tag-list">
        <?php foreach ($currentPost['ingredientes'] as $ingrediente): ?>
            <li class="ingrediente-item"><?= $ingrediente ?></li>
        <?php endforeach; ?>
    </ul>

    <h3 id="categories-title" style="margin-top: 30px;">Categorias</h3>
    <ul id="categories-list">
        <?php foreach ($categories as $category): ?>
            <li><a href="#"><?= $category ?></a></li>
        <?php endforeach; ?>
    </ul>
</aside>

    <?php else: ?>
        <p style="text-align: center; width: 100%;">Receita não encontrada!</p>
    <?php endif; ?>
</main>

<?php include_once("templates/footer.php"); ?>