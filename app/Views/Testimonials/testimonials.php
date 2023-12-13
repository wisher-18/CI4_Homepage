<?= $this->extend("layouts/default") ?>
<?= $this->section("title") ?>Testimonials<?= $this->endSection() ?>
<?= $this->section("content") ?>
<?= $this->include("home/navbar") ?>
</div>
<style>
  .testimonials{
    box-sizing:border-box;
    
    background-size:cover;
    height:100%;
  }
  .testimonials a{
    color:#ccc;
  }
  .container-testimonials{
    width:50%;
    min-height:60vh;
    margin:0 auto;
    position:relative;
    padding-bottom:30px;
    overflow:hidden;
    display: flex;
    flex-direction: column;
    justify-content: center;
  }
  .testimonials h2{
  color:#736861; 
  margin:15px 0 5px;
  text-shadow:0 1px rgba(255,255,255,0.5);
}
.testimonials h6{
  color:#928566; 
  margin:0;
}
input[type="radio"] {
position: absolute;
width: 1px; /* Setting this to 0 make it invisible for VoiceOver */
height: 1px; /* Setting this to 0 make it invisible for VoiceOver */
padding: 0;
margin: -1px;
border: 0;
clip: rect(0 0 0 0);
overflow: hidden;
}
.testimonials label{
  display:block;
  width:32%;
  border: 4px solid #ddd;;
  position:absolute;
  bottom:5px;
  cursor: pointer;
  transition: border-color 0.3s linear;
}
label.second{
  left:34%;
}
label.third{
  left:68%;
}
blockquote{
  margin:0;
  padding:30px;
  
  background-color: #DB532B;
  color:white;
  box-shadow: 0 5px 2px rgba(0,0,0,0.1);
  position:relative;
  transition: background-color 0.6s linear;
}
blockquote:after { 
  content: " "; 
  height: 0; 
  width: 0; 
  position: absolute; 
  top: 100%; 
  border: solid transparent; 
  border-top-color: #DA532B;
  border-left-color:#DA532B;
  border-width: 10px; 
  left: 10%; 
} 
#second:checked ~ .two blockquote {
  background-color:purple;
}
.two blockquote:after{
  border: solid transparent; 
  border-top-color: purple;
  border-left-color:purple;
  border-width: 10px;
}
#third:checked ~ .three blockquote{
  background-color:#54885F;
}
.three blockquote:after{
  border: solid transparent; 
  border-top-color: #54885F;
  border-left-color: #54885F;
  border-width: 10px;
}
.quotes{
  position:absolute;
  color:rgba(255,255,255,0.5);
  font-size:5em;
}
.leftq{
  top:-25px;
  left:5px;
}
.rightq{
  bottom:-10px;
  right:5px;
}
.testimonials img{
  max-width: 100%;
  object-fit: cover;
  float:left;
  margin-right: 20px;
}
.slide{
  position:absolute;
  left:-100%;
  opacity:0;
  transition: all 0.6s ease-in;
}

#first:checked ~ label.first {
  border-width:6px;
  border-color:#DB532B;
}
#second:checked ~ label.second {
  border-width:6px; border-color:purple;
}
#third:checked ~ label.third {
  border:6px solid #54885F;
}

#first:checked ~ div.one {
  left:0;
  opacity:1;
}
#second:checked ~ div.two {
  left:0;
  opacity:1;
}
#third:checked ~ div.three {
  left:0;
  opacity:1;
}
</style>
<section class="testimonials">
<h2 class="text-center" style="font-size:larger">Our Testimonials</h2>
<div class="container-testimonials col-10">
  <input type="radio" name="nav" id="first" checked/>
  <input type="radio" name="nav" id="second" />
  <input type="radio" name="nav" id="third" />
  
  <label for="first" class="first"></label>
<label for="second"  class="second"></label>
<label for="third" class="third"></label>
 
  <div class="one slide">
    <blockquote>
      <span class="leftq quotes">&ldquo;</span> He promptly completed the task at hand and communicates really well till the project reaches the finishing line. I was pleased with his creative design and will definitely be hiring him again. <span class="rightq quotes">&bdquo; </span>
    </blockquote>
    <div class="mt-5">
      <img src="public/images/slide1.jpg" width="170" height="130" />
      <h2>Angela Kruger</h2>
      <h6>UI/UX Designer at Woof Design Studio</h6>
    </div>
  </div>
  
  <div class="two slide">
    <blockquote>
      <span class="leftq quotes">&ldquo;</span> He promptly completed the task at hand and communicates really well till the project reaches the finishing line. I recommend him to anyone who wants their work done professionally. The project ... <a href="#"> read more</a><span class="rightq quotes">&bdquo; </span>
    </blockquote>
    <div class="mt-5">
    <img src="public/images/slide2.jpg" width="170" height="130" />
    <h2>John Doe</h2>
    <h6>Developer Relations at Woof Studios</h6>
    </div>
  </div>
  
  <div class="three slide">
    <blockquote>
      <span class="quotes leftq"> &ldquo;</span> He promptly completed the task at hand and communicates really well till the project reaches the finishing line. I was pleased with his creative design and will definitely be hiring him again. <span class="rightq quotes">&bdquo; </span>
    </blockquote>
    <div class="mt-5">
    <img src="public/images/slide3.jpeg" width="170" height="130" />
    <h2>Steve Stevenson</h2>
    <h6>CEO Woof Web Design Studios</h6>
    </div>
  </div>
  
  
</div>
</section>

<?= $this->include("home/footer") ?>
<?= $this->endSection("content") ?>
