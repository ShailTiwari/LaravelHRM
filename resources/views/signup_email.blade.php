<<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  
</head>
<style type="text/css">
  @import url('https://fonts.googleapis.com/css?family=Varela+Round');

* {
  margin: 0;
  padding: 0;
  font-family: Varela Round, 'Segoe UI', 'Arial', 'san serif';
}

img {
  display: inline-block;
}
.container {
  max-width: 500px;
  margin: 20px auto;
  border-radius: 4px;
  border: 1px solid rgba(0, 0, 0, .1);
  // border-top: 3px solid #016FB9;
  min-height: 100px;
  position: relative;
  &::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 3px;
    background: linear-gradient(to right, #0267C1, #D65108);
  }
}

.logo {
  display: flex;
  margin: 30px auto 0;
  align-items: center;
  justify-content: center;
  // padding: 20px;
  a {
    display: block;
    width: 30px;
    height: 30px;
    // overflow: hidden;
  }
  img {
    width: 180px;
  }
  .c-name {
    display: inline-block;
    font-weight: 600;
  }
}

.thumbs {
  width: 100px;
  margin: auto;
  height: 136px;
  img {
    width: 100%;
  }
}

.illustration {
  width: 100%;
  text-align: center;
  box-shadow: 0 10px 20px -5px rgba(0, 0, 0, .05);
  border-radius: 0 0 50% 50% / 1%;
  text-align: center;
}

.illustration img {
  width: 70%;
  margin: 50px auto;
}

.separator {
  display: block;
  height: 3px;
  width: 70%;
  margin: 10px auto;
  background-color: rgba(0, 0, 0, .05);
  border-radius: 10px;
  position: relative;
  overflow: hidden;
  &::before, &::after {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    height: 100%;
    width: 33%;
    border-radius: inherit;
    opacity: .05;
  }
  &::before {
    left: 0;
    background: #EFA00B;
  }
  &::after {
    left: initial;
    right: 0;
    background: #D65108;
  }
}

.hgroup {
  text-align: center;
  padding: 50px 30px 30px;
}

.name {
  display: block;
  // text-transform: uppercase;
  // margin-bottom: 5px;
  color: #0267C1;
  font-weight: 600;
  font-size: 1.1rem;
}

.hgroup h1 {
  font-size: 20px;
  font-weight: 600;
  color: #333;
}

.hgroup h2 {
  font-size: 19px;
}

.hgroup p {
  font-size: 15px;
  color: slategrey;
  margin-top: 15px;
  text-align: justify;
  line-height: 25px;
}

.items {
  padding: 30px;
  display: grid;
  grid-template-columns: repeat(2, 1fr);
}

.item {
  margin-bottom: 10px;
  text-align: center;
  width: 100%;
  margin: 0 auto 50px;
}


.item .icon {
    margin-bottom: 10px;
}

.item .icon img {
  width: 60px;
}

.item .title {
  margin-bottom: 5px;
  font-size: 16px;
  font-weight: 600;
}

.item .subtitle {
  font-size: 13px;
  color: slategrey;
  padding: 1rem;
}

.button-wrap {
  text-align: center;
  padding: 2rem;
}

button.explore {
  padding: 15px 25px;
  font: inherit;
  background: linear-gradient(to right, #0267C1, #0280EF);
  border-radius: 50px;
  border: 0;
  color: #fff;
  margin: auto;
  display: inline-block;
  transition: all .2s ease-in-out;
  cursor: pointer;
  box-shadow: 0 5px 10px rgba(0, 0, 0, .1);
}

button.explore:hover {
  transform: translateY(-5px);
    box-shadow: 0 15px 10px -7px rgba(0, 0, 0, .1);
}


footer {
  font-size: 12px;
  color: slategrey;
  text-align: center;
  padding: 30px;
}

.rad {
  margin: 0!important;
  text-align: center!important;
  font-size: 18px!important;
}

.raised {
  font-size: 16px;
  color: #777;
  display: block;
  color: steelblue;
}
</style>
<body>

<div class="container">
  
  <div class="illustration">
    <div class="hgroup">
      <span class="name">Hello, {{$username}}</span>
      <h1>Thank you for Signing Up</h1>
      <div class="thumbs">
        <a href="https://imgbb.com/"><img src="https://i.ibb.co/2g7tS2d/good.png" alt="good" border="0"></a>
      </div>
      <p class="rad">Rad stuff is here</p>
    </div>
  </div>

  <div class="hgroup">
    <p>
      Placeholder aims at solving all lending problems in africa, we built a platform to support the lenders community with high quality, cost concious assets like: the web plug in, mobile app, chat bot, sophiscated credit analysis, bank statement analysis and more. And these products live on a site packed with the best practice and shared knowledge resources from our team to you.
      <br><br>
      <p>
        <span class="raised">Hold up, there's more!</span>
        A 7 days simulation trial, your trial starts now.
      </p>
      <p>If you have any questions, kindly reach out to our team on support@placeholder.com.</p>

      <p>Have an AWESOME day! <br>
        Brought to you by your friends at Placeholder.
      </p>
    </p>

  </div>
  <div class="hgroup">
    <h2>What we offer</h2>
  </div>
  <div class="items">
    <div class="item">
      <div class="icon">
        <img src="https://i.ibb.co/tHZQHTB/desktop.png" alt="desktop" border="0">
      </div>
      <div class="title">Advance Backend</div>
      <div class="subtitle">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet sed culpa cupiditate?
      </div>
    </div>
    <div class="item">
      <div class="icon">
        <img src="https://i.ibb.co/zSD3NkX/smartphone.png" alt="smartphone" border="0">
      </div>
      <div class="title">Mobile Platform</div>
      <div class="subtitle">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet sed culpa cupiditate?
      </div>
    </div>
  </div>
  <div class="button-wrap">
    <button class="explore">
      Explore
    </button>
  </div>
  <footer>
    Aloha Inc © 2022
    <br>
    Pune India.
    <br>
    Tel: 00 1 460 5416
  </footer>
</div>
</body>
</html>
