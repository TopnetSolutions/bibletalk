@extends('master')
@section('title')
  BT | HOME
@endsection

  @section('content')
    <div class="container-fluid">
    <div class="row welcomesection">
      <div id="carousel-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-generic" data-slide-to="1"></li>
          <li data-target="#carousel-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <!-- slide1 -->
          <div class="item active">
            <img src="{{ asset('img/slide1.jpg')}}" class="img-responsive" alt="bible Talk home page image">
            <div class="carousel-caption">
              <h1>Welcome to Bible Talk</h1>
              <p>We love God, we love His words</p>
            </div>
          </div>
          <!-- slide2 -->
          <div class="item">
            <img src="{{ asset('img/slide2.jpeg')}}" class="img-responsive" alt="bible Talk home page image">
            <div class="carousel-caption">
              <h1>LOVE IN SHARING</h1>
              <p>What better way to show love than to share it?</p>
            </div>
          </div>
          <!-- slide3 -->
          <div class="item">
            <img src="{{ asset('img/slide0.jpeg')}}" class="img-responsive" alt="bible Talk home page image">
            <div class="carousel-caption">
              <h1>Share It...</h1>
              <p>Have you been inspired by a Bible verse recently?</p>
            </div>
          </div>
        </div>
        <!-- Controls -->
      </div>
    </div>
  </div>
  <!--..... the word of God section.... -->
  <section class="word">
    <div class="container">
      .<div class="row">
        <div class="col-md-6 col-md-offset-3">
          <h2 class="text-center">THE WORD OF GOD IS LIFE</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <div class="thumbnail">
              <img src="{{ asset('img/read.jpeg')}}">
              <div class="caption">
                <h3>READ IT</h3>
                <p>Romans 10:17 <BR> “So faith comes from hearing, and hearing through the word of Christ.”</p>
                  <br>
              </div>

          </div>
        </div>

        <div class="col-md-3">
          <div class="thumbnail">

              <img src="{{ asset('img/meditate.jpeg')}}">
              <div class="caption">
                <h3>MEDITATE</h3>
                <p>Psalm 1:2 <BR>But his delight is in the law of the Lord, and on his law he meditates day and night.</p>
                <br>
              </div>

          </div>
        </div>

        <div class="col-md-3">
          <div class="thumbnail">

              <img src="{{ asset('img/live.jpeg')}}">
              <div class="caption">
                <h3>LIVE IT</h3>
                <p>James 1:26 <BR> If any man among you seem to be religious, and bridleth not his tongue, but deceiveth his own heart, this man's religion [is] vain</p>
              </div>

          </div>
        </div>

        <div class="col-md-3">
          <div class="thumbnail">

              <img src="{{ asset('img/share.jpg')}}">
              <div class="caption">
                <h3>SHARE IT</h3>
                <p> 2 Timothy 4:2 <BR>preach the word; be ready in season and out of season; reprove, rebuke, exhort, with great patience and instruction.</p>
              </div>

          </div>
        </div>



      </div>
    </div>
  </section>
<!----------------Rules and regulation section starts here--------------- -->
  <div class="container rules text-center">
    <div class="text-center">
      <h2>RULES AND REGULATIONS</h2>
    </div>
    <div class="row">

      <div class="col-md-4">
        <div class="panel panel-rules">
          <div class="panel-heading">
            <h3 class="panel-title">ONE</h3>
          </div>
          <div class="panel-body">
            <h3>God's word only</h3>
            <p>The board was created to enable people share inspiring message from the Bible. If you have been touched or inspired or blessed by a particular bible verse recently, Kindly share it with us.</p>
          </div>
          <div class="panel-footer">
            <p>God's word only</p>
          </div>
        </div>
      </div>


      <div class="col-md-4">
        <div class="panel panel-rules">
          <div class="panel-heading">
            <h3 class="panel-title">TWO</h3>
          </div>
          <div class="panel-body">
            <h3>No Arguement</h3>
            <p>You are not to engage anyone in arguement. Our aim is to allow people communicate freely as they are led by the spirit. If any post go against your belief, be free to choose the same topic and air your views </p>
          </div>
          <div class="panel-footer">
            <p>Prove dont argue</p>
          </div>
        </div>
      </div>


      <div class="col-md-4">
        <div class="panel panel-rules">
          <div class="panel-heading">
            <h3 class="panel-title">THREE</h3>
          </div>
          <div class="panel-body">
            <h3 class="text-center">Steps to Share</h3>
            <ul class="text-left">
              <li>Register</li>
              <li>In your dashboard, click post</li>
              <li>Choose a unique topic</li>
              <li>Click post</li>
              Note: Post are editable only once.
            </ul>
          </div>
          <div class="panel-footer">
            <p>Only Members can post</p>
          </div>
        </div>
      </div>


    </div>
  </div>




  @endsection
