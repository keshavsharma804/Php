<?php 
$Title = "Menu";
$headerImg =  '/Php/Restaurent_project/images/df.jpg';
include 'src/inc/headers.php';
?>

<section class="menu-background">
  <div class="menu-content">
    <h2>Popular Dishes</h2>
    <div class="menu-grid">

      <div class="menu-card">
        <img src="images/pizza.jpg" alt="Margherita Pizza">
        <h3>Margherita Pizza</h3>
        <p>₹250</p>
      </div>

      <div class="menu-card">
        <img src="images/butter-chicken.jpg" alt="Butter Chicken">
        <h3>Butter Chicken</h3>
        <p>₹300</p>
      </div>

      <div class="menu-card">
        <img src="images/paneer-tikka.jpg" alt="Paneer Tikka">
        <h3>Paneer Tikka</h3>
        <p>₹220</p>
      </div>

      <div class="menu-card">
        <img src="images/gulab-jamun.jpg" alt="Gulab Jamun">
        <h3>Gulab Jamun</h3>
        <p>₹90</p>
      </div>

    </div>
  </div>
</section>

<?php include 'src/inc/footer.php'; ?>
