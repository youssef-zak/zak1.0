<?php
/* Template Name: Contact Zak */
get_header(); ?>
<main class="section">
  <div class="container card" style="padding:30px;">
    <h1>Contact</h1>
    <p class="tagline">We respond within 24 hours for all custom studio requests.</p>
    <div class="product-hero" style="margin-top:20px;">
      <div>
        <h3>Send a message</h3>
        <form class="contact-form" action="#" method="post" style="display:grid; gap:12px;">
          <input type="text" name="name" placeholder="Name" required style="padding:12px;border-radius:12px;border:1px solid var(--border);">
          <input type="email" name="email" placeholder="Email" required style="padding:12px;border-radius:12px;border:1px solid var(--border);">
          <textarea name="message" rows="4" placeholder="Project details" style="padding:12px;border-radius:12px;border:1px solid var(--border);"></textarea>
          <button class="btn" type="submit">Send Message</button>
        </form>
      </div>
      <div class="card" style="padding:16px;">
        <h4>Studios</h4>
        <p class="tagline">Dubai · Riyadh · Remote</p>
        <div class="benefits-grid" style="grid-template-columns:repeat(auto-fit,minmax(140px,1fr));">
          <div><strong>Email</strong><p class="tagline">hello@zak.studio</p></div>
          <div><strong>Phone</strong><p class="tagline">+971 555 000</p></div>
          <div><strong>Support</strong><p class="tagline">24/7 live chat</p></div>
        </div>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>
