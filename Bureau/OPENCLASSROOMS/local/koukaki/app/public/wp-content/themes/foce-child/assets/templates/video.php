<?php
/**
 * Template for displaying a video background section
 *
 * @package Fleurs_d'oranger_&_Chats_errants
 */

// Récupérer l'URL du répertoire des uploads
$upload_dir = wp_get_upload_dir();
?>
<section class="video-background">
  <!-- Fallback pour le mobile et pendant le chargement de la vidéo -->
  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/banner.png" alt="Image de fond" class="fallback-image">

  <!-- Vidéo de fond -->
  <video autoplay muted loop playsinline class="background-video">
    <source src="<?php echo $upload_dir['baseurl']; ?>/2024/10/StudioKoukaki-video.mp4" type="video/mp4">
    <!-- Fallback si la vidéo ne peut pas être lue -->
    Votre navigateur ne supporte pas les vidéos HTML5.
  </video>

  <!-- Titre du court-métrage -->
  <div class="video-overlay-content">
    <h1 id="court-metrage-title">Titre du court-métrage</h1>
  </div>
</section>
