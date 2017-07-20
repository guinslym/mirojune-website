    <div class="container">
    <style>
      .paintingsShow img.img-responsive {
        display: inline-block;
      }

      .paintingsShow{
        margin-top: 30px;
        margin-bottom: 60px;
      }
      .paintingsShow p.description{
        margin-top: 60px;
        margin-bottom: 20px;
        padding-top: 20px;
      }
      .paintingsShow h3.title{
        font-family: 'Bellefair', serif;
      }

      .big-title {
    text-align: center;
}
  .big-title h2 {
      padding: 12px 10px 10px;
      color: #566473;
      font-size: 44px;
      line-height: 50px;
      margin: 0 auto 50px;
      text-align: center;
      text-transform: uppercase;
      text-shadow: none;
      font-weight: 700;
      position: relative;
      display: inline-block;
  }


  .big-title h2::before,
  .big-title h2::after {
      position: absolute;
      top: 100%;
      left: 0;
      width: 100%;
      height: 3px;
      background: #566473;
      content: '';
      -webkit-transition: -webkit-transform 0.3s;
      -moz-transition: -moz-transform 0.3s;
      transition: transform 0.3s;
      -webkit-transform: scale(0.85);
      -moz-transform: scale(0.85);
      transform: scale(0.85);
  }

  .big-title h2::after {
      opacity: 0;
      -webkit-transition: top 0.3s, opacity 0.3s, -webkit-transform 0.3s;
      -moz-transition: top 0.3s, opacity 0.3s, -moz-transform 0.3s;
      transition: top 0.3s, opacity 0.3s, transform 0.3s;
  }

  .big-title h2:hover::before,
  .big-title h2:hover::after,
  .big-title h2:focus::before,
  .big-title h2:focus::after {
      -webkit-transform: scale(1);
      -moz-transform: scale(1);
      transform: scale(1);
  }
  .big-title h2:hover::after,
  .big-title h2:focus::after {
      top: 0%;
      opacity: 1;
  }

  /* big title light */

  .big-title.light h2::before,
  .big-title.light h2::after {
      background: white;
  }
    </style>

    <div class="row">
            <div class="col-md-12 big-title wow bounceIn animated paintingsShow" style="visibility: visible;">
                  <h2>Painting</h2>
            </div>

    </div>
      <div class="row text-center paintingsShow">


        <div class="col-md-2"></div>
        <div class="col-md-8">
          <img src="http://www.modehire.com.au/wp-content/uploads/2017/01/intro.jpg" alt="" class="img-responsive center-block">
          <h3 class="title">Lorem ipsum dolor sit amet, consectetur.</h3>
            <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, ducimus.</p>
        </div>
        <div class="col-md-2"></div>
      </div>
    </div>