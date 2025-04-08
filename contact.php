<?php
/* Template Name: Contact */
get_header(); ?>

<section class="contact-section">
  <div class="container">
    <h1>お問い合わせ</h1>
    <form action="#" method="POST" class="contact-form">
      <div class="form-group">
        <label for="name">名前：</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="email">メールアドレス：</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="message">メッセージ：</label>
        <textarea id="message" name="message" rows="5" required></textarea>
      </div>
      <div class="form-group full-width">
        <button type="submit" class="cta-button">送信</button>
      </div>
    </form>
  </div>
</section>

<?php get_footer(); ?>
