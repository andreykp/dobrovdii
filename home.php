<?php
/*
Template name: home
*/
get_header(); ?>

<main>
    <section class="hero section">
        <div class="container">
        <h2 class="hero-title">Підсилюємо дітей сумської
        онко-гематології медикаментами та
        яскравими емоціями з 2016 року</h2>
        <a href="<?= get_template_directory_uri() ?>/donation.html" class="help-btn">Хочу допомогти</a>
        </div>
    </section>

    <section class="about-us section">
        <div class="container">
        <h1 id="about">Благодійний Фонд «ДОБРОВДІЇ»</h1>
        <p>Протягом 5 років ми систематично, прозоро та дієво підсилюємо маленьких пацієнтів Сумської онко-гематології. Усі 100%
        донацій направляються на закупівлю необхідних дітям ліків, медичного обладнання, проводимо благодійні акції та заходи,
        що направлені на популяризацію волонтерської діяльності, толерантності та гуманності в суспільстві.</p>
        <p>Усе розпочалося в 2016 році з підтримки маленького хлопчика Андрійка в боротьбі з лейкемією (початок та деталі <a href="https://www.facebook.com/dobrovdii/posts/663403167147907" class="details">тут</a>).
        Зовсім скоро переросло у волонтерську діяльність, що стала не лише прозорою та чесною (близько 1 мілн. грн було зібрано
        та витрачено на потреби дітей), а й трансформувалося в МІСІЮ – збереження життя та об’єднання людства.</p>
        <p>Завжди хочеться зробити більше, відреагувати швидше, допомогти ефективніше, але наші можливості обмежені кількістю та
        частотою благодійних внесків. Мріємо про розширення меж своєї діяльності з області до країни, а потім і світу. Тому
        кожна пожертва важлива та життєво необхідна.</p>
        <p>РАЗОМ МОЖЕМО БІЛЬШЕ!</p>
        </div>
    </section>

    <section class="events section">
        <div class="container">
        <h2 id="events">Благодійні акції</h2>
        <h3 class="subtitle">Благодійні акції на підтримку дітей з онкодіагнозами</h3>


        <ul class="events-list list">

        <?php
        // category Благодійні акції
        $cat_id = 5;

        $cat_id 
            = get_cat_ID('Благодійні акції');
    $args = array(
        'posts_per_page' => 5,
        'cat' => $cat_id,
    );
    $posts = get_posts($args);
    foreach ($posts as $post) :
        ?>
            <li class="item card">

                <div class="card-thumb">
                <?php 
                echo the_post_thumbnail(array(260,260));
                ?>
                </div>
                <div class="card-content">
                    <h3><?= the_title() ?> </h3>
                    <p class="info"><?php the_excerpt('more text'); ?></p>
                    <a href="<?php the_permalink();?>" class="details-btn">Деталі</a>
                </div>

            </li>
    

        <?php 
    endforeach;
        ?>

        <li class="item card">
            <div class="card-thumb">
                <img src="<?= get_template_directory_uri() ?>//images/event-2.jpg" alt="Фото акції" width="260" height="260" class="image">
            </div>
            <div class="card-content">
                <h3>БА «Радій життю! Допомагай із радістю» квітень-травень 2017</h3>
                <p class="info">Фотопроєкт із дітами та їхніми матусями, які зіткнулися з онкологією. Збір коштів на закупівлю необхідних медикаментів у
                відділення сумської онко-гематології.</p>
                <a href="#" class="details-btn">Деталі</a>
            </div>
        </li>

        <li class="item card">
            <div class="card-thumb">
                <img src="<?= get_template_directory_uri() ?>//images/event-3.jpg" alt="Фото акції" width="260" height="260" class="image">
            </div>
            <div class="card-content">
                <h3>БА «Листопад посмішок» листопад 2017</h3>
                <p class="info">Формування подарункових торбинок з «посмішками» для дітей зі стаціонара сумської онко-гематології.</p>
                <a href="#" class="details-btn">Деталі</a>
            </div>
        </li>

        <li class="item card">
            <div class="card-thumb">
                <img src="<?= get_template_directory_uri() ?>//images/event-4.jpg" alt="Фото акції" width="260" height="260" class="image">
            </div>
            <div class="card-content">
                <h3>БА «Щедрі серця» грудень 2017</h3>
                <p class="info">Збір подарунків для дітей та коштів на придбання медикаментів. </p>
                <a href="#" class="details-btn">Деталі</a>
            </div>
        </li>

        <li class="item card">
            <div class="card-thumb">
                <img src="<?= get_template_directory_uri() ?>//images/event-5.jpg" alt="Фото акції" width="260" height="260" class="image">
            </div>
            <div class="card-content">
                <h3>БА «Книги до Миколая» грудень 2019</h3>
                <p class="info">Спільна акція з авторками книги «Сумин городок», з 10 по 19 грудні усі кошти від продажів книг направились на придбання
                ліків.</p>
                <a href="#" class="details-btn">Деталі</a>
            </div>
        </li>
        </ul>
        </div>
        

        <div class="photo-list">
            <div class="main-photo">
                <img src="<?= get_template_directory_uri() ?>/images/photo-01.jpg" alt="Фото акції" width="710" height="827" class="image">
            </div>
            <div class="photo-box">
                <img src="<?= get_template_directory_uri() ?>/images/photo-02.jpg" alt="Фото акції" width="345" class="image">
                <img src="<?= get_template_directory_uri() ?>/images/photo-03.jpg" alt="Фото акції" width="345" class="image">
                <img src="<?= get_template_directory_uri() ?>/images/photo-04.jpg" alt="Фото акції" width="710" class="image last-photo">
            </div>
        </div>
        
    </section>

    <section class="news section">
        <div class="container">
        <h2 id="news">Новини</h2>
        <h3 class="subtitle">Ми систематично публікуємо новини на сторінках соціальних мереж <a href="https://www.facebook.com/diinadobro" class="details">тут</a></h3>
    <div uk-slider>     
    <ul class="events-list list">

    <?php
        $cat_id = 2;

        $cat_id 
            = get_cat_ID('news');
    $args = array(
        'posts_per_page' => 5,
        'cat' => $cat_id,
    );
    $posts = get_posts($args);
    foreach ($posts as $post) :
        ?>
            <li class="item card">

                <div class="card-thumb">
                <?php 
                echo the_post_thumbnail(array(260,260));
                ?>
                </div>
                <div class="card-content">
                    <p class="news-date"><?= get_the_date('d.m.Y') ?></p>
                    <h3><?= the_title() ?> </h3>
                    <p class="info"><?php the_excerpt('more text'); ?></p>
                    <a href="<?php the_permalink();?>" class="details-btn">Деталі</a>
                </div>

            </li>
    

        <?php 
    endforeach;
        ?>

        <li class="item card">
            <div class="card-thumb">
                <img src="<?= get_template_directory_uri() ?>/images/news-01.jpg" alt="Фото акції" width="260" height="260" class="image">
            </div>
            <div class="card-content">
                <p class="news-date">03.11.2021</p>
                <h3>Передали у відділення життєво-необхідні антибіотики</h3>
                <p class="info">У жовтні виповнилося 5 років із дня заснування Сумського Благодійного Фонду «ДОБРОВДІІ». 
                    За цей час, об’єднуючи наші зусилля, ми підсилювали діток у складній боротьбі за здоров’я. 
                    Прозоро та чесно, систематично та з детальним звітом, без адміністративних витрат.</p>
                <a href="#" class="details-btn">Деталі</a>
            </div>
        </li>
    
        <li class="item card">
            <div class="card-thumb">
                <img src="<?= get_template_directory_uri() ?>/images/news-02.jpg" alt="Фото акції" width="260" height="260" class="image">
            </div>
            <div class="card-content">
                <p class="news-date">13.08.2021</p>
                <h3>Дуже дієвий антибіотик «Меронем» уже підсилює дітей</h3>
                <p class="info">5 упаковок антибіотику «Меронем», придбаного за кошти донацій, направилися в Сумську дитячу онко-гематологію. 
                    Меропінем є одним із найефективніших антибіотиків, які допомагають малюкам справлятися з інфекціми після хіміотерапії.</p>
                <a href="#" class="details-btn">Деталі</a>
            </div>
        </li>
    
        <li class="item card">
            <div class="card-thumb">
                <img src="<?= get_template_directory_uri() ?>/images/news-03.jpg" alt="Фото акції" width="260" height="260" class="image">
            </div>
            <div class="card-content">
                <p class="news-date">21.07.2021</p>
                <h3 class="news-title">Випускний благодійної школи естетичного виховання «Школярка-Панянка»</h3>
                <p class="info">У п'ятницю 16 липня відбувся урочистий захід вручення випускних сертифікатів юним ученицям благодійної школи «Школярка-Панянка».
                    Дівчата передали 6700 грн на підтримку маленьким пацієнтам сумської онко-гематології.</p>
                <a href="#" class="details-btn">Деталі</a>
            </div>
        </li>
    
        <li class="item card">
            <div class="card-thumb">
                <img src="<?= get_template_directory_uri() ?>/images/news-04.jpg" alt="Фото акції" width="260" height="260" class="image">
            </div>
            <div class="card-content">
                <p class="news-date">01.06.2021</p>
                <h3>129 систем для Інфузомату завдяки вам уже у відділенні
                    (-9919 грн)</h3>
                <p class="info">На зібрані кошти було придбано системи для інфозоматів. 
                Через постійні хіміотерапії та підтримуючі крапельниці діти з відділення постійно потребують нових надходжень. </p>
                <a href="#" class="details-btn">Деталі</a>
            </div>
        </li>
    
        <li class="item card">
            <div class="card-thumb">
                <img src="<?= get_template_directory_uri() ?>/images/news-05.jpg" alt="Фото акції" width="260" height="260" class="image">
            </div>
            <div class="card-content">
                <p class="news-date">21.06.2021</p>
                <h3>Сьогодні завдяки вам відвезли ліків на суму - 28 376 грн підсилювати діток у Сумську онко-гематологію</h3>
                <p class="info">Життєво необхідні ліки 6 уп. «Меронем» (-20 400 грн)
                    4 уп. «Коломіцин» (-7 976 грн) допомагають дітям боротися з бактеріальними інфекціями.</p>
                <a href="#" class="details-btn">Деталі</a>
            </div>
        </li>
        <li class="item card">
            <div class="card-thumb">
                <img src="<?= get_template_directory_uri() ?>/images/news-06.jpg" alt="Фото акції" width="260" height="260" class="image">
            </div>
            <div class="card-content">
                <p class="news-date">30.12.2020</p>
                <h3>Привітання від Миколая</h3>
                <p class="info">Друзі, вітаємо з прийдешніми святами та бажаємо здоров’я та щастя вам, вашим рідним та близьким!</p>
                <a href="#" class="details-btn">Деталі</a>
            </div>
        </li>
        
        <li class="item card">
            <div class="card-thumb">
                <img src="<?= get_template_directory_uri() ?>/images/news-07.jpg" alt="Фото акції" width="260" height="260" class="image">
            </div>
            <div class="card-content">
                <p class="news-date">28.12.2020</p>
                <h3>Від дітей - дітям!</h3>
                <p class="info">Зворушливе відео від Dance Centru Artes, Ірини Восмерік, Марина Борщенко за участі Микити Хомайко - супер героя, 
                    який за 4 років пройшов складний шлях боротьби з злоякісною Лімфомою Ходжкіна.</p>
                <a href="#" class="details-btn">Деталі</a>
            </div>
        </li>
        
        <li class="item card">
            <div class="card-thumb">
                <img src="<?= get_template_directory_uri() ?>/images/news-08.jpg" alt="Фото акції" width="260" height="260" class="image">
            </div>
            <div class="card-content">
                <p class="news-date">16.10.2020</p>
                <h3>Інфузомат B Braun compact plus (-76 920 грн) придбали завдяки вам.</h3>
                <p class="info">12 жовтня представник компанії виробника запустив насос та поставив апарат на гарантію та сервіс, тому час звітувати.</p>
                <a href="#" class="details-btn">Деталі</a>
            </div>
        </li>
        
        <li class="item card">
            <div class="card-thumb">
                <img src="<?= get_template_directory_uri() ?>/images/news-09.jpg" alt="Фото акції" width="260" height="260" class="image">
            </div>
            <div class="card-content">
                <p class="news-date">14.08.2020</p>
                <h3>13-го серпня антибіотики «Меронем» (-3600) та «Бліцеф» (-2054 грн) уже допомагають діткам із Сумської онко-гематології</h3>
                <p class="info">Зараз на рахунку 2451 грн - хочеться вірити, що завдяки спільним діям на добро ми зможемо у вересні придбати життєво необхідний інфузомат, вартістю 80 тис.грн.</p>
                <a href="#" class="details-btn">Деталі</a>
            </div>
        </li>
        
        <li class="item card">
            <div class="card-thumb">
                <img src="<?= get_template_directory_uri() ?>/images/news-10.jpg" alt="Фото акції" width="260" height="260" class="image">
            </div>
            <div class="card-content">
                <p class="news-date">18.06.2020</p>
                <h3>11 флаконів необхідного діткам препарату «Євроцефтаз» (-2081.20 грн) уже допомагають малечі Сумської Онко-гематології</h3>
                <p class="info">Безмежна вдячність усім, хто долучився в період з 1 травня-18 червня.</p>
                <a href="#" class="details-btn">Деталі</a>
            </div>
        </li>
    </ul>
    </div>
    
    </div>
    </section>

    <section class="donation section">
        <div class="container">
        <h2 class="section-title">Допоможіть підсилювати діток</h2>
        <h3 class="subtitle">Ви можете внести свій вклад у підтримку діяльності та волонтерства</h3>
        <a href="<?= get_template_directory_uri() ?>/donation.html" class="donation-btn">Приват24</a>
        </div>
    </section>

    <section class="founder section">
        <div class="container">
        <h2 class="section-title">Засновниця Благодійного Фонду «ДОБРОВДІЇ» </h2>
        <h3 class="subtitle">Якщо у вас виникли питання, напишіть нам: <a href="mailto:dobrovdii.ceo@gmail.com" class="mail-link">dobrovdii.ceo@gmail.com</a></h3>
        <div class="founder-box">
            <img src="<?= get_template_directory_uri() ?>/images/founder.jpg" alt="Фото засновниці" width="200px">
        </div>
        <h3 class="founder-subtitle">Юлія Ісай</h3>
        <p class="founder-position">Засновниця</p>
    
        

        <a href="<?= get_template_directory_uri() ?>/fond-doc.html" class="documents-btn">Установчі документи</a>
        </div>
    </section>
</main>

<?php
get_footer()
?>
