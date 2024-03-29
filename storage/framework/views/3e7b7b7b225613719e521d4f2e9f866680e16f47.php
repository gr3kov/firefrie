<footer class="footer">
<div class="footer__desctop">
  <nav>
    <div class="logo">
      <a href="<?php echo route('home'); ?>.html" class="logo-img">
        <img src="/img/new-logo.svg" alt="">
      </a>
    </div>
    <ul class="footer__menu">
      <li class="footer__menu-item"><a href="<?php echo route('offer'); ?>" class="footer__menu-link">Публичная оферта</a></li>
      <li class="footer__menu-item"><a href="<?php echo route('agreement'); ?>" class="footer__menu-link">Пользовательское соглашение</a></li>
      <li class="footer__menu-item"><a href="<?php echo route('security'); ?>" class="footer__menu-link">Гарантия безопасности</a></li>
      <li class="footer__menu-item"><a href="<?php echo route('agreement') . '#personalBefore'; ?>" class="footer__menu-link">Политика конфиденциальности</a></li>
      <li class="footer__menu-item"><a href="<?php echo route('delivery'); ?>" class="footer__menu-link">Доставка и оплата</a></li>
      <li class="footer__menu-item"><a href="<?php echo route('tactics'); ?>" class="footer__menu-link">Тактика победы</a></li>
    </ul>
  </nav>
  <p class="footer__copyright">Flame auction© <?php echo date('Y'); ?>. All rights reserved</p>
</div>
<div class="footer__mobile">
  <nav>
    <div class="logo">
      <a href="<?php echo route('home'); ?>" class="logo-img">
        <img src="/img/new-logo.svg" alt="">
      </a>
      <div class="footer__mobile-nav">
        <a href="payment.html" class="footer__menu-link footer__menu-item footer__mobile-nav_item">Доставка и оплата</a>
        <a href="tactic.html" class="footer__menu-link footer__menu-item">Тактика победы</a>
      </div>
    </div>
    <ul class="footer__menu">
      <li class="footer__menu-item"><a href="<?php echo route('offer'); ?>" class="footer__menu-link">Публичная оферта</a></li>
      <li class="footer__menu-item"><a href="<?php echo route('agreement'); ?>" class="footer__menu-link">Пользовательское соглашение</a></li>
      <li class="footer__menu-item"><a href="<?php echo route('security'); ?>" class="footer__menu-link">Гарантия безопасности</a></li>
      <li class="footer__menu-item"><a href="<?php echo route('agreement') . '#personalBefore'; ?>" class="footer__menu-link">Политиика конфиденциальности</a></li>

    </ul>
  </nav>
  <p class="footer__copyright footer__copyright-mobile">Flame auction© <?php echo date('Y'); ?>. All rights reserved</p>
</div>
</footer>
<?php /**PATH /var/www/html/laravelapp/resources/views/partial/footer.blade.php ENDPATH**/ ?>