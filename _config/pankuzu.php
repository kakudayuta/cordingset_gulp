<?php if ($folder_name != null): ?>
<div class="pankuzu">
  <ul class="pankuzu_list" itemscope itemtype="https://schema.org/BreadcrumbList">
    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
      <a itemprop="item" href="<?=$pas?>">
        <span itemprop="name">
          トップ
        </span>
      </a>
      <meta itemprop="position" content="1" />
    </li>
    <?php if ($request_url_explode[$url_count - 1]): ?>
    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
      <a itemprop="item" href="<?=$pas . $folder_name . "/"?>">
        <span itemprop="name">
          <?php echo $folder_name; ?>
        </span>
      </a>
      <meta itemprop="position" content="2" />
    </li>
    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
      <a itemprop="item" href="<?=$request_url;?>">
        <span itemprop="name">
          <? echo $pankuzuName ? $pankuzuName : $viewPageTitle; ?>
        </span>
      </a>
      <meta itemprop="position" content="3" />
    </li>
    <?php else: ?>
    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
      <a itemprop="item" href="<?=$request_url;?>">
        <span itemprop="name">
          <? echo $pankuzuName ? $pankuzuName : $viewPageTitle; ?>
        </span>
      </a>
      <meta itemprop="position" content="2" />
    </li>
    <?php endif; ?>
  </ul>
</div>
<?php endif; ?>