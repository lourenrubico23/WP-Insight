<?php get_header() ?>
<section id="home" class="banner"  style="background-image:url(<?php echo get_field('banner_image') ?>)">
      <div class="container">
        <div class="banner__wrapper">
          <h1>
            <?php echo get_field('banner_h1')?>
          </h1>
          <div class="banner__btn">
            <a href="" class="btn bg--transparent"><?php echo get_field('banner_btn1')?></a>
            <a href="" class="btn bg--primary"><?php echo get_field('banner_btn2')?></a>
          </div>
        </div>
      </div>
    </section>

    <section id="services" class="cards">
      <div class="container">
        <div class="cards__title">
          <h2><?php echo get_field('services_h2')?></h2>
          <p><?php echo get_field('services_p')?></p>
        </div>
        <div class="cards__wrapper">
        <?php 
                            $args = array(
                            'post_type' => 'ServicePost', 
                            'posts_per_page' => -1,
                            );
                            $newQuery = new WP_Query($args)
                        ?>

                        <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();?>
                        <div class="cards__item">
                          <div class="cards__item__wrapper">
                            <div class="cards__item__text">
                              <h3><?php echo get_field('services_h3') ?></h3>
                              <p>
                              <?php echo get_field('services_p') ?>
                              </p>
                              <ul>
                                <li><?php echo get_field('list1') ?></li>
                                <li><?php echo get_field('list2') ?></li>
                                <li><?php echo get_field('list3') ?></li>
                                <li><?php echo get_field('list4') ?></li>
                                <li><?php echo get_field('list5') ?></li>
                              </ul>
                            </div>
                          </div>
                          <a href=""><?php echo get_field('services_btn') ?></a>
                        </div>
                <?php echo get_the_post_thumbnail() ?>
                    
                    <?php
                    endwhile;
                    else :
                        echo "no available content yet";
                    endif;
                    wp_reset_postdata();
            ?>
        </div>
      </div>
    </section>


    <section id="projects" class="projects">
      <div class="projects__wrapper">
      <?php 
                            $args = array(
                            'post_type' => 'ProjectPost', 
                            'posts_per_page' => -1,
                            );
                            $newQuery = new WP_Query($args)
                        ?>

                        <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();?>
                        <div class="projects__item">
                          <div class="cue"></div>
                          <img src="<?php echo get_field('project_image') ?>" alt="" />
                          <div class="projects__item__text">
                            <h3><?php echo get_field('project_h3') ?></h3>
                            <p>
                            <?php echo get_field('project_p') ?>
                            </p>
                            <a href="" class="btn bg--primary"><?php echo get_field('project_btn') ?></a>
                          </div>
                        </div>
                <?php echo get_the_post_thumbnail() ?>
                    
                    <?php
                    endwhile;
                    else :
                        echo "no available content yet";
                    endif;
                    wp_reset_postdata();
            ?>
      </div>
    </section>

    <section id="contacts" class="contacts">
      <div class="container">
        <div class="contacts__title">
          <h2>Contacts</h2>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates,
            omnis!
          </p>
        </div>
        <div class="contacts__wrapper">
          <div class="contacts__form">
            <input type="text" placeholder="Name" />
            <input type="text" placeholder="Email" />
            <textarea name="" id="" cols="30" rows="10">Message</textarea>
            <a href="" class="btn bg--primary">Send Message</a>
          </div>
          <div class="contacts__social">
            <table>
              <tr>
                <td><i class="<?php echo get_field('map') ?>"></i></td>
                <td><?php echo get_field('address') ?></td>
              </tr>

              <tr>
                <td><i class="<?php echo get_field('icon_phone') ?>"></i></td>
                <td><?php echo get_field('phone') ?></td>
              </tr>

              <tr>
                <td><i class="<?php echo get_field('icon_email') ?>"></i></td>
                <td><?php echo get_field('email') ?></td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </section>

    <?php get_footer() ?>