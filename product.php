<?php require('partials/header.php');?>
    
<!-- Headings -->
   <section class="headings">
       <h3>Product</h3>
       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, illum!</p>
   </section>
   
<!-- Product  -->
   <section class="product container">
       <article>
           <img src="img/products1.jpg" alt="">
       </article>
       <aside>
           <h2>Nike</h2>
           <h4>$139.00</h4>
           <p>Category: <span>Shoes</span></p>
           <p>Availibility: In <span>Stock</span></p>
           <hr>
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, cumque ipsam, ad accusamus ea dolores commodi? Nihil quia beatae porro magni ipsa dolores ut molestias fugiat aut, eveniet, corrupti animi incidunt fugit repudiandae voluptatibus adipisci blanditiis voluptate perferendis sapiente. Sunt.</p>
           <form>
               <label>Quantity</label>
               <select>
                   <option value="1">1</option>
                   <option value="2">2</option>
                   <option value="3">3</option>
               </select>
               <br>
               <button type="button">Add to cart</button>
               <span><i class="far fa-gem"></i></span>
               <span><i class="fas fa-heart"></i></span>
           </form>
       </aside>
   </section>
    
<?php require('partials/footer.php');?>