@extends('layouts.app')
@section('title')
<title>Templates</title>
@endsection
@section('content')
  <!-- Main Content -->
  <section class="content-wrap">

    <!-- Banner -->
    <div class="tp-banner banner-top-tp-banner-parallax small">
      <div class="image" style="background-image: url('assets/images/banner-blog-bg.jpg')">
      </div>

      <div class="info">
        <div>
          <div class="container">
            <h2>Components</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- /Banner -->


    <div class="container-tp-content">

 d      <!-- Buttons -->
      <h2 class="h1 mt-0">Buttons</h2>
      <a href="#!" class="btn btn-xs">Button</a>
      <a href="#!" class="btn btn-xs active">Button</a>
      <br>
      <br>
      <a href="#!" class="btn btn-sm">Button</a>
      <a href="#!" class="btn btn-sm active">Button</a>
      <br>
      <br>
      <a href="#!" class="btn">Button</a>
      <a href="#!" class="btn active">Button</a>
      <br>
      <br>
      <a href="#!" class="btn btn-lg">Button</a>
      <a href="#!" class="btn btn-lg active">Button</a>

      <h3>Button Colors</h3>
      <a href="#!" class="btn btn-primary">Primary</a>
      <a href="#!" class="btn btn-success">Success</a>
      <a href="#!" class="btn btn-info">Info</a>
      <a href="#!" class="btn btn-warning">Warning</a>
      <a href="#!" class="btn btn-danger">Danger</a>
      <br>
      <br>
      <a href="#!" class="btn active btn-primary">Primary</a>
      <a href="#!" class="btn active btn-success">Success</a>
      <a href="#!" class="btn active btn-info">Info</a>
      <a href="#!" class="btn active btn-warning">Warning</a>
      <a href="#!" class="btn active btn-danger">Danger</a>

      <h3>Button Groups</h3>
      <div class="btn-group">
        <a href="#!" class="btn">Button</a>
        <a href="#!" class="btn">Button</a>
        <a href="#!" class="btn">Button</a>
        <a href="#!" class="btn">Button</a>
      </div>

      <h3>Button Dropdown</h3>
      <div class="btn-group">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
          Action <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" role="menu">
          <li><a href="#">Action</a>
          </li>
          <li><a href="#">Another action</a>
          </li>
          <li><a href="#">Something else here</a>
          </li>
          <li class="divider"></li>
          <li><a href="#">Separated link</a>
          </li>
        </ul>
      </div>
      <div class="btn-group">
        <button type="button" class="btn btn-danger">Action</button>
        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
          <span class="caret"></span>
          <span class="sr-only">Toggle Dropdown</span>
        </button>
        <ul class="dropdown-menu" role="menu">
          <li><a href="#">Action</a>
          </li>
          <li><a href="#">Another action</a>
          </li>
          <li><a href="#">Something else here</a>
          </li>
          <li class="divider"></li>
          <li><a href="#">Separated link</a>
          </li>
        </ul>
      </div>
      <div class="btn-group dropup">
        <button type="button" class="btn btn-default">Dropup</button>
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
          <span class="caret"></span>
          <span class="sr-only">Toggle Dropdown</span>
        </button>
        <ul class="dropdown-menu" role="menu">
          <li><a href="#">Action</a>
          </li>
          <li><a href="#">Another action</a>
          </li>
          <li><a href="#">Something else here</a>
          </li>
          <li class="divider"></li>
          <li><a href="#">Separated link</a>
          </li>
        </ul>
      </div>
      <!-- /Buttons -->


      <!-- Pagination -->
      <h2 class="h1">Pagination</h2>
      <ul class="pagination mt-0 mb-0">
        <li><a href="#!">Button</a>
        </li>
        <li class="active"><a href="#!">Button</a>
        </li>
        <li><a href="#!">Button</a>
        </li>
        <li><a href="#!">Button</a>
        </li>
        <li><a href="#!">Button</a>
        </li>
      </ul>
      <!-- /Pagination -->


      <!-- Progress Bars -->
      <h2 class="h1">Progress Bars</h2>
      <div class="progress">
        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
          <span class="sr-only">40% Complete (success)</span>
        </div>
      </div>
      <div class="progress">
        <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
          <span class="sr-only">20% Complete</span>
        </div>
      </div>
      <div class="progress">
        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
          <span class="sr-only">60% Complete (warning)</span>
        </div>
      </div>
      <div class="progress">
        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
          <span class="sr-only">80% Complete (danger)</span>
        </div>
      </div>
      <!-- /Progress Bars -->


      <!-- Timeline -->
      <h2 class="h1">Timeline</h2>
      Timeline example you can see in this page <a href="user-profile.html">user-profile.html</a>
      <!-- /Timeline -->


      <!-- Accordion -->
      <h2 class="h1">Accordion</h2>
      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            One <span class="icon-plus"></span>
                        </a>
                    </h4>
          </div>
          <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body">
              Ludum mutavit. Verbum est ex. Et ... sunt occidat. Videtur quod est super omne oppidum. Quis transfretavit tu iratus es contudit cranium cum dolor apparatus. Qui curis! Modo nobis certamen est, qui non credunt at.
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingTwo">
            <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Two <span class="icon-plus"></span>
                        </a>
                    </h4>
          </div>
          <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
            <div class="panel-body">
              Ludum mutavit. Verbum est ex. Et ... sunt occidat. Videtur quod est super omne oppidum. Quis transfretavit tu iratus es contudit cranium cum dolor apparatus. Qui curis! Modo nobis certamen est, qui non credunt at.
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingThree">
            <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Three <span class="icon-plus"></span>
                        </a>
                    </h4>
          </div>
          <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
            <div class="panel-body">
              Ludum mutavit. Verbum est ex. Et ... sunt occidat. Videtur quod est super omne oppidum. Quis transfretavit tu iratus es contudit cranium cum dolor apparatus. Qui curis! Modo nobis certamen est, qui non credunt at.
            </div>
          </div>
        </div>
      </div>
      <!-- /Accordion -->


      <!-- Tabs -->
      <h2 class="h1">Tabs</h2>
      <div role="tabpanel">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a>
          </li>
          <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a>
          </li>
          <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a>
          </li>
          <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a>
          </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane active" id="home">
            Blowfish librantur in se quatuor, quinquies maior quam normalis, et quare? Quare id faciam? Ut terrorem facit, qui quid. Terrent! Ut alter, scarier pisces agminis off. Et quod tu es? Vos blowfish. Tu iustus in omnibus visio.
          </div>
          <div role="tabpanel" class="tab-pane" id="profile">
            Nonne vides quid sit? Tu es ... Jesse me respice. Tu ... blowfish sunt. A blowfish! Cogitare. Statura pusillus, nec sapientium panem, nec artificum.
          </div>
          <div role="tabpanel" class="tab-pane" id="messages">
            Sed predators facile prædam blowfish secretum telum non se habet. Non ille? Quid faciam blowfish, Isai. Blowfish quid faciat? In blowfish inflat, purus?
          </div>
          <div role="tabpanel" class="tab-pane" id="settings">
            Vides ... suus ' suus 'non aliud aerem. Nunc ... qui cum partibus blowfish Isai? Tu damnare ius. Vos blowfish. Dicere iterum. Dicere illam quasi velis eam. Es BLOWFISH!
          </div>
        </div>

      </div>
      <!-- /Tabs -->


      <!-- Features -->
      <h2 class="h1">Features</h2>
      <section class=-tp-features container">
        <div class="col-m dd-3 col-xs-12">
          <div class="feature angled-bg">
            <i class="fa fa-cc-visa"></i>
            <h3>Payment</h3>
            <small>More than 10 payment systems</small>
          </div>
        </div>
        <div class="col-md-3 col-xs-12">
          <div class="feature angled-bg">
            <i class="fa fa-gamepad"></i>
            <h3>Games</h3>
            <small>A large number of games</small>
          </div>
        </div>
        <div class="col-md-3 col-xs-12">
          <div class="feature angled-bg">
            <i class="fa fa-money"></i>
            <h3>Cheap</h3>
            <small>Lowest prices on the Internet</small>
          </div>
        </div>
        <div class="col-md-3 col-xs-12">
          <div class="feature angled-bg">
            <i class="fa fa-users"></i>
            <h3>Community</h3>
            <small>The largest gaming community</small>
          </div>
        </div>
      </section>
      <!-- /Features -->


      <!-- Tables -->
      <h2 class="h1">Tables</h2>
      <table class="table table-bordered table-hover">
        <thead>
          <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>

      <table class="table table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>
      <!-- /Tables -->


      <!-- Pager -->
      <h2 class="h1">Pager</h2>
      <nav>
        <ul class="pager">
          <li><a href="#">Previous</a>
          </li>
          <li><a href="#">Next</a>
          </li>
        </ul>
      </nav>
      <nav>
        <ul class="pager">
          <li class="previous"><a href="#"><span aria-hidden="true">&larr;</span> Older</a>
          </li>
          <li class="next"><a href="#">Newer <span aria-hidden="true">&rarr;</span></a>
          </li>
        </ul>
      </nav>
      <!-- /Pager -->


      <!-- Labels -->
      <h2 class="h1">Labels</h2>
      <h1>Example heading <span class="label label-default">New</span></h1>
      <h2>Example heading <span class="label label-default">New</span></h2>
      <h3>Example heading <span class="label label-default">New</span></h3>
      <h4>Example heading <span class="label label-default">New</span></h4>
      <h5>Example heading <span class="label label-default">New</span></h5>
      <h6>Example heading <span class="label label-default">New</span></h6>

      <h3>Available variations</h3>
      <span class="label label-default">Default</span>
      <span class="label label-primary">Primary</span>
      <span class="label label-success">Success</span>
      <span class="label label-info">Info</span>
      <span class="label label-warning">Warning</span>
      <span class="label label-danger">Danger</span>
      <!-- /Labels -->


      <!-- Alerts -->
      <h2 class="h1">Alerts</h2>
      <div class="alert" role="alert">
        <strong>Well done!</strong> You successfully read this important alert message.
      </div>
      <div class="alert alert-primary" role="alert">
        <strong>Well done!</strong> You successfully read this important alert message.
      </div>
      <div class="alert alert-success" role="alert">
        <strong>Well done!</strong> You successfully read this important alert message.
      </div>
      <div class="alert alert-info" role="alert">
        <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
      </div>
      <div class="alert alert-warning" role="alert">
        <strong>Warning!</strong> Better check yourself, you're not looking too good.
      </div>
      <div class="alert alert-danger" role="alert">
        <strong>Oh snap!</strong> Change a few things up and try submitting again.
      </div>

      <h3>Dismissible Alerts</h3>
      <div class="alert alert-warning alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
        </button>
        <strong>Warning!</strong> Better check yourself, you're not looking too good.
      </div>
      <!-- /Alerts -->


      <!-- Modals -->
      <h2 class="h1">Modals</h2>
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
        Launch demo modal
      </button>

      <!-- Modal -->
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
              </button>
              <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">
              Sum expectantes. Ego hodie expectantes. Expectantes, et misit unum de pueris Gus interficere. Et suus vos. Nescio quis, qui est bonus usus liberi ad Isai? Qui nosti ... Quis dimisit filios ad necem ... hmm? Gus! Est, ante me factus singulis decem gradibus.
              Et nunc ad aliud opus mihi tandem tollendum est puer ille consensus et nunc fugit. Ipse suus obtinuit eam. Non solum autem illa, sed te tractantur in se trahens felis.
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
      <!-- /Modals -->


      <!-- Tooltips -->
      <h2 class="h1">Tooltips</h2>
      <div class="align-center">
        <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="left" title="Tooltip on left">Tooltip on left</button>

        <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Tooltip on top">Tooltip on top</button>

        <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">Tooltip on bottom</button>

        <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="right" title="Tooltip on right">Tooltip on right</button>
      </div>
      <!-- /Tooltips -->


      <!-- Popovers -->
      <h2 class="h1">Popovers</h2>
      <div class="align-center">
        <button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
          Popover on left
        </button>

        <button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
          Popover on top
        </button>

        <button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus
            sagittis lacus vel augue laoreet rutrum faucibus.">
          Popover on bottom
        </button>

        <button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
          Popover on right
        </button>
      </div>
      <!-- /Popovers -->


    </div>

    <!-- Footer -->
    <footer class=-tp-footer-parallax">
      <div class="wrap dper" style="background-image: url('assets/images/footer-bg.jpg')">

        <!-- Social Buttons -->
        <div class="social">
          <div class="container">
            <h3>Connect socially with <strong-tp</strong></h3>

 d            <div class="row icons">
              <div class="col-xs-6 col-sm-3">
                <a href="#!">
                  <i class="fa fa-facebook-square"></i>
                  <span>Like on Facebook</span>
                </a>
              </div>
              <div class="col-xs-6 col-sm-3">
                <a href="#!">
                  <i class="fa fa-twitter-square"></i>
                  <span>Follow on Twitter</span>
                </a>
              </div>
              <div class="col-xs-6 col-sm-3">
                <a href="#!">
                  <i class="fa fa-twitch"></i>
                  <span>Watch on Twitch</span>
                </a>
              </div>
              <div class="col-xs-6 col-sm-3">
                <a href="#!">
                  <i class="fa fa-youtube-square"></i>
                  <span>Watch on Youtube</span>
                </a>
              </div>
            </div>

          </div>
        </div>
        <!-- /Social Buttons -->

        <!-- Copyright -->
        <div class="copyright">
          <div class="container">
            <strong>nK</strong> &copy; 2015. All rights reserved
          </div>
        </div>
        <!-- /Copyright -->

      </div>
    </footer>
    <!-- /Footer -->

  </section>
  <!-- /Main Content -->

  <!-- Search Block -->
  <div class="search-block">
    <a href="#!" class="search-toggle glyphicon glyphicon-remove"></a>
    <form action="search.html">
      <div class=-tp-input">
        <input type=" dtext" name="search" placeholder="Search...">
      </div>
    </form>
  </div>
  <!-- /Search Block -->
@stop