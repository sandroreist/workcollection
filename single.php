
    <?php get_header(); ?>

      <main class="cd-main-content">

      <div class="section0">
        <p><?php the_title(); ?></p>
      </div>

      <?php

      while(have_posts()) {
      
      the_post();
        ?>

      <div class="section">
        <div class="content">
        

        <h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>

        <?php the_content(); ?>
      </div>
        <div class="add clearfix">
          <p class="date"><i class="fa fa-clock-o" aria-hidden="true"></i><?php the_date(); ?><span>,&nbsp;</span><?php the_time(); ?></p>
          <p class="author"><i class="fa fa-users" aria-hidden="true"></i><?php the_author(); ?></p>
          <p class="category"><i class="fa fa-tags" aria-hidden="true"></i><?php the_category( ', ' ); ?></p>
        </div>
      </div> 

        <?php
      }
      ?>
      <!--
      <div class="section">
        <div class="content">
          <h1>Sandro Reist</h1>
          <p>Ich heisse Sandro und bin Mediamatiker im ZEM. Dies soll mein eigenes Wordpress-Template werden, da ich sowieso mal ein eigenes machen möchte. Cool. </p>
        </div>
        <div class="add clearfix">
          <p class="date"><i class="fa fa-clock-o" aria-hidden="true"></i>Date</p>
          <p class="category"><i class="fa fa-tags" aria-hidden="true"></i>Category Tags</p>
        </div>
      </div> 

      <div class="section">
        <div class="content">
          <h1>Sandro Reist</h1>
          <p>Ich heisse Sandro und bin Mediamatiker im ZEM. Dies soll mein eigenes Wordpress-Template werden, da ich sowieso mal ein eigenes machen möchte. Cool. </p>
        </div>
        <div class="add clearfix">
          <p class="date"><i class="fa fa-clock-o" aria-hidden="true"></i>Date</p>
          <p class="category"><i class="fa fa-tags" aria-hidden="true"></i>Category Tags</p>
        </div>
      </div>

      <div class="section">
        <div class="content">
          <h1>Sandro Reist</h1>
          <p>Ich heisse Sandro und bin Mediamatiker im ZEM. Dies soll mein eigenes Wordpress-Template werden, da ich sowieso mal ein eigenes machen möchte. Cool. </p>
        </div>
        <div class="add clearfix">
          <p class="date"><i class="fa fa-clock-o" aria-hidden="true"></i>Date</p>
          <p class="category"><i class="fa fa-tags" aria-hidden="true"></i>Category Tags</p>
        </div>
      </div>-->


    </main>

    <?php get_footer(); ?>

    