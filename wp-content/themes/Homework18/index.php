<?php get_header(); ?>

        <main class="m-page">
            <div class="container clearfix">
                <div class="main-column">

                        <?php
                            if (have_posts()) :
                                while (have_posts()) : the_post(); ?>
                                    <?php  the_post_thumbnail(); ?>
                                    <article class="info-block">
                                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                        <span class="info-block-text"><?php the_content(''); ?></span>
                                    </article>
                                    <div class="continue-button">
                                        <div class="continue-name"><a href="#">Continue reading</a></div>
                                    </div>
                                <?php endwhile;
                            else :
                                echo '<p>No content found</p>';
                            endif;
                        ?>

                </div>
                <div class="right-column">
                    <section>
                        <div class="about"><span class="about-title">About Blogin.</span></div>
                        <span class="about-text">
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.<br/><br/>
                            Excepteur sint occaecat sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </span>
                    </section>
                    <section>
                        <div class="about"><span class="about-title">Search.</span></div>
                        <form>
                            <input class="search" type="text" placeholder="What are you looking for?"/>
                        </form>
                    </section>
                    <section>
                        <div class="about"><span class="about-title">Stay tuned.</span></div>
                        <form>
                            <input class="search" type="email" placeholder="Your Email"/>
                        </form>
                    </section>
                </div>
            </div>
            <div class="container clearfix">
                <div class="next-previous">
                    <div class="previous">
                        <img src="<?php bloginfo('template_directory'); ?>/img/previous.png" alt="Previous"/>
                        <a href="#">Previous</a>
                    </div>
                    <div class="next">
                        <img src="<?php bloginfo('template_directory'); ?>/img/next.png" alt="Next"/>
                        <a href="#">Next</a>
                    </div>
                </div>
            </div>
        </main>


<?php get_footer(); ?>