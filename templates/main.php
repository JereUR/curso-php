<main>
  <!-- <pre style="font-size: 8px; overflow:scroll; max-height: 250px;">
    <?php
      var_dump($data);
    ?>
  </pre> -->
  <section>
    <img src="<?= $poster_url?>" width="200" alt="Poster de <?=$title?>" style="border-radius: 16px"/>
  </section>

  <hgroup>
    <h2><?= $title;?> - <?=$until_message?></h2>
    <p>Fecha de estreno: <?=$release_date?></p>
    <p style="margin:10px 0px; padding: 8px; border:1px solid #fff; border-radius: 5px; font-style: italic;"><?=$overview?></p>
    <p>La siguiente es: <?=$following_production?></p>
  </hgroup>
</main>