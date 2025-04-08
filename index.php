
<?php get_header(); ?>

<div class="container">
    <h1>Welcome to My Portfolio</h1>
    <p>シンプルで洗練されたデザインのポートフォリオサイトです。</p>
    <a href="#contact" class="cta-button">お問い合わせ</a>
</div>

<section id="contact">
    <h2>お問い合わせ</h2>
    <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="POST" class="contact-form">
        <div class="form-group">
            <label for="email">メールアドレス：</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="message">メッセージ：</label>
            <textarea id="message" name="message" rows="5" required></textarea>
        </div>
        <div class="form-group">
            <div class="g-recaptcha" data-sitekey="6Lf7ev4qAAAAAEVdZG6ZCmKpMFH8cnAQshQxeBQy"></div>
        </div>
        <button type="submit" class="submit-button">送信</button>
    </form>
</section>

<?php get_footer(); ?>
