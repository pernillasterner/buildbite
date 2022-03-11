<?php 
$icon = get_sub_field('icon');
$header = get_sub_field('header');
$content = get_sub_field('content');
$text = get_sub_field('text');
$link = get_sub_field('link');
?>

<?php 
$lang = get_language_attributes();
if(strpos($lang, 'sv-SE')) : 
    $header = 'Att komma igång är lika enkelt som 1, 2, 3';
    $li_1 = 'Skapa ett gratis konto';
    $li_2 = 'Bjud in dina kunder';
    $li_3 = 'Börja bygga bättre';
    $questions = 'Har du en fråga?';
    $contact = 'Kontakta oss';
    $big_header = 'Börja bygga bättre med Buildbite idag ';
    $content = 'Prova Buildbite gratis i 30 dagar och ändra på de traditionella byggprocesserna genom att samarbeta med alla i realtid.';
elseif(strpos($lang, 'fi')) :
    $header = 'Aloittaminen ei ole koskaan ollut näin helppoa';
    $li_1 = 'Luo ilmainen tili';
    $li_2 = 'Kutsu asiakkaat';
    $li_3 = 'Aloita rakentamaan paremmin!';
    $questions = 'Onko sinulla kysymys?';
    $contact = 'Ota yhteyttä';
    $big_header = 'Aloita tänään parempi rakentaminen Buildbiten avulla';
    $content = 'Kokeile Buildbite 30. päivää ilmaiseksi ja muuta perinteiset rakennusprosessit tuomalla kaikki mukaan reaaliaikaisesti.';
else :
    $header = 'Getting started is easy as 1, 2, 3';
    $li_1 = 'Create an account for free';
    $li_2 = 'Invite your clients';
    $li_3 = 'Start building better!';
    $questions = 'Do you have a question?';
    $contact = 'Contact us';
    $big_header = 'Start building better with Buildbite today.';
    $content = 'Try Buildbite for free for 30-day and finally break the traditional construction silos to let everyone collaborate together.';
endif;
?>

<section id="modul_get-started" class="modul modul_get-started">
    <div class="row modul-content">
        <div class="col-4 modul-left">
            <div class="row-auto pt-6">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Vector.svg" alt="">
                <h4><?php echo $header; ?></h4>
                <ul class="d-flex justify-content-start flex-wrap flex-column">
                    <li>1. <?php echo $li_1; ?></li>
                    <li>2. <?php echo $li_2; ?></li>
                    <li>3. <?php echo $li_3; ?></li>
                </ul>
            </div>
            <div class="row contact-info">
                <p><?php echo $questions; ?></p>
                <a href="<?php echo site_url(''); ?>"><?php echo $contact; ?></a>
            </div>

        </div>
        <div class="col-8 modul-right">
            <a class="close" href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/Close.svg" alt=""></a>
           <div class="row text-center">
               <h2><?php echo $big_header; ?></h2>
               <p><?php echo $content; ?></p>
           </div>
           <img src="<?php echo get_template_directory_uri(); ?>/assets/img/get_started.svg" alt="">
        </div>
    </div>
</section>
