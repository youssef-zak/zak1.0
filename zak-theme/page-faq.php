<?php
/* Template Name: Zak FAQ */
get_header(); ?>
<main class="section">
  <div class="container card" style="padding:30px;">
    <h1>Frequently Asked Questions</h1>
    <div class="section" style="padding:20px 0 0;">
      <?php $faqs = [
        [ 'q' => 'How fast is shipping?', 'a' => 'Express options deliver within 2-4 business days with tracking.' ],
        [ 'q' => 'Do you support returns?', 'a' => 'Yes, 30-day no-questions returns on unopened items.' ],
        [ 'q' => 'Does the theme support RTL?', 'a' => 'Inter + Tajawal and layout styles are RTL-ready.' ],
        [ 'q' => 'Is there a dark mode?', 'a' => 'Light/dark toggles with smooth transitions across all components.' ],
      ];
      foreach ( $faqs as $faq ) : ?>
        <details class="card" style="padding:14px; margin-bottom:10px;">
          <summary style="font-weight:700; cursor:pointer;"><?php echo esc_html( $faq['q'] ); ?></summary>
          <p class="tagline" style="margin-top:8px;"><?php echo esc_html( $faq['a'] ); ?></p>
        </details>
      <?php endforeach; ?>
    </div>
  </div>
</main>
<?php get_footer(); ?>
