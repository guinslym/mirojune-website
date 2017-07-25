<script src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/2.1.11/jquery.mixitup.min.js"></script>
<style>
	

.active{
  background: #68b8c4;
}

button:focus{
  outline: 0 none;
}

.product-grid:after{
  display: inline-block;
  width: 100%;
}

.product-grid .mix,
.product-grid .gap{
  display: inline-block;
}

.product-grid .mix{
  display: none;
}

.product-grid .mix:after{

  display: inline-block;

}

.product-grid .mix:before{
  display: inline-block;
}

img{
	padding-bottom: 40px;
}
ul.sortit {
	list-style: none;
}


#filters ul li {
    display: inline-block;
    margin: 0 5px;
}
#filters ul li a {
    display: block;
}
#filters ul li a:hover h5, #filters ul li a.active h5 {
    color: #fff;
}
#filters ul li a h5 {
    padding: 10px 20px;
    text-transform: uppercase;
    border-radius: 3px;
    font-size: 13px;
    transition: all 0.3s ease 0s;
    -moz-transition: all 0.3s ease 0s;
    -webkit-transition: all 0.3s ease 0s;
    -o-transition: all 0.3s ease 0s;
}
#filters {
    margin-top: 10px;
    margin-bottom: 40px;
    text-align: center;
    display: block;
    float: none;
    z-index: 2;
    position: relative;
}
</style>


<div class="container">
		<div class="row">


	<ul class="clearfix">
        <li><a id="all" href="#" data-filter="*" class="active"><h5>All</h5></a></li> 
        <li><a href="#" data-filter=".wordpress"><h5>Wordpress</h5></a></li>
        <li><a href="#" data-filter=".jquery"><h5>jQuery</h5></a></li>
        <li><a href="#" data-filter=".php"><h5>PHP</h5></a></li>
        <li><a href="#" data-filter=".css"><h5>CSS</h5></a></li>
        <li><a href="#" data-filter=".html"><h5>HTML</h5></a></li>
    </ul>


            <div class="col-md-12 big-title wow bounceIn animated paintingsShow" style="visibility: visible;">
                  <h2>Archive</h2>
            </div>



			<div class="controls">

				<div class="col-md-3 col-xs-12">
				SORT BY:
				<select id="SortSelect">
					<option value="myorder:asc">Asc</option>
					<option value="myorder:desc">Des</option>
				</select>
				
				</div>

				<div class="row">
					
					<div class="col-md-9 col-xs-12 text-right">
						<br/>
						<ul class="sortit">
							<li>
								<a><button class="white-border filter btn btn-primary" data-filter=".category-1">A</button></a>
								
							</li>
							<li>
								<a><button class="white-border filter btn btn-primary" data-filter=".category-2">B</button></a>
								
							</li>
							<li>
								<a><button class="white-border filter btn btn-primary" data-filter=".category-3">C</button></a>
								
							</li>
							<li>
								<a><button class="white-border filter btn btn-primary" data-filter=".category-4">D</button></a>
								
							</li>
							<li>
								<a><button class="filter" data-filter="all" class="white-border filter" data-filter=".category-8" >All</button></a>
							</li>
						</ul>
					</div>
				</div>
			  
			  
			</div>
			<div id="product-grid" class="product-grid">
			  <div class="mix category-1 col-md-4 col-xs-6" data-myorder="1"><img src="https://static.guim.co.uk/sys-images/Guardian/Pix/pictures/2014/4/11/1397210130748/Spring-Lamb.-Image-shot-2-011.jpg" class="center-block img-responsive lazy"/></div>
			  <div class="mix category-1 col-md-4 col-xs-6" data-myorder="2"><img src="https://static.guim.co.uk/sys-images/Guardian/Pix/pictures/2014/4/11/1397210130748/Spring-Lamb.-Image-shot-2-011.jpg" class="center-block img-responsive lazy"/></div>
			  <div class="mix category-1 col-md-4 col-xs-6" data-myorder="3"><img src="https://static.guim.co.uk/sys-images/Guardian/Pix/pictures/2014/4/11/1397210130748/Spring-Lamb.-Image-shot-2-011.jpg" class="center-block img-responsive lazy"/></div>
			  <div class="mix category-2 col-md-4 col-xs-6" data-myorder="4"><img src="https://static.guim.co.uk/sys-images/Guardian/Pix/pictures/2014/4/11/1397210130748/Spring-Lamb.-Image-shot-2-011.jpg" class="center-block img-responsive lazy"/></div>
			  <div class="mix category-1 col-md-4 col-xs-6" data-myorder="5"><img src="https://static.guim.co.uk/sys-images/Guardian/Pix/pictures/2014/4/11/1397210130748/Spring-Lamb.-Image-shot-2-011.jpg" class="center-block img-responsive lazy"/></div>
			  <div class="mix category-1 col-md-4 col-xs-6" data-myorder="6"><img src="https://static.guim.co.uk/sys-images/Guardian/Pix/pictures/2014/4/11/1397210130748/Spring-Lamb.-Image-shot-2-011.jpg" class="center-block img-responsive lazy"/></div>
			  <div class="mix category-2 col-md-4 col-xs-6" data-myorder="7"><img src="https://static.guim.co.uk/sys-images/Guardian/Pix/pictures/2014/4/11/1397210130748/Spring-Lamb.-Image-shot-2-011.jpg" class="center-block img-responsive lazy"/></div>
			  <div class="mix category-4 col-md-4 col-xs-6" data-myorder="8"><img src="https://static.guim.co.uk/sys-images/Guardian/Pix/pictures/2014/4/11/1397210130748/Spring-Lamb.-Image-shot-2-011.jpg" class="center-block img-responsive lazy"/></div>
			  <div class="mix category-2 col-md-4 col-xs-6" data-myorder="9"><img src="https://static.guim.co.uk/sys-images/Guardian/Pix/pictures/2014/4/11/1397210130748/Spring-Lamb.-Image-shot-2-011.jpg" class="center-block img-responsive lazy"/></div>
			  <div class="mix category-6 col-md-4 col-xs-6" data-myorder="10"><img src="https://static.guim.co.uk/sys-images/Guardian/Pix/pictures/2014/4/11/1397210130748/Spring-Lamb.-Image-shot-2-011.jpg" class="center-block img-responsive lazy"/></div>
			  <div class="mix category-2 col-md-4 col-xs-6" data-myorder="11"><img src="https://static.guim.co.uk/sys-images/Guardian/Pix/pictures/2014/4/11/1397210130748/Spring-Lamb.-Image-shot-2-011.jpg" class="center-block img-responsive lazy"/></div>
			  <div class="mix category-5 col-md-4 col-xs-6" data-myorder="12"><img src="https://static.guim.co.uk/sys-images/Guardian/Pix/pictures/2014/4/11/1397210130748/Spring-Lamb.-Image-shot-2-011.jpg" class="center-block img-responsive lazy"/></div>

			  <div class="gap"></div>
			  <div class="gap"></div>
			</div>
		</div>
	</div>


<script>
	
	$(function(){
	  $('#product-grid').mixItUp();
	});
	
	$(function(){
	  var $sortSelect = $('#SortSelect'),
		  $container = $('#product-grid');
	  
	  $container.mixItUp();
	  

	  
	  $sortSelect.on('change', function(){
		$container.mixItUp('sort', this.value);
	  });
	});

</script>