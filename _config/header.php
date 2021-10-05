<header>
  <div class="header__inner">
    <div class="header__logoBox">
      <h1 class="header__logoItem">
        <a href="<?=$pas;?>" class="header__logoLink">
          <img class="header__logoImage" src="<?=$pas;?>img/common/meta/logo.svg" width="30" height="30" alt="">
          コーディングセット
        </a>
      </h1>
    </div>

    <div class="header__navInner">
      <nav class="header__navBox">
        <ul class="header__navList">
          <li class="header__navItem">
            <a href="<?=$pas;?>" class="header__navLink <?=($folder_name == null) ? "header__navLink--active" : "";?>">トップ</a>
          </li>

          <li class="header__navItem">
            <a href="<?=$pas;?>sample/" class="header__navLink <?=($folder_name == "sample") ? "header__navLink--active" : "";?>">サンプル</a>
          </li>
        </ul>
      </nav>
    </div>
  </div>


  <div class="menu__inner">
    <a href="javascript:void(0)" class="menu__button"><span>MENU</span></a>
  </div>
</header>
