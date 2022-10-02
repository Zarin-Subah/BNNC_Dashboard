<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="x-ua-compatible" content="ie=edge">

<title>BNNC Dashboard</title>

<!-- Font Awesome Icons -->
<link rel="stylesheet" href="{{asset('template/plugins/fontawesome-free/css/all.min.css')}}">
<!-- IonIcons -->
<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="{{asset('template/dist/css/adminlte.min.css')}}">
<!-- Google Font: Source Sans Pro -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
<style>
    .card-header{
        background-color: #179978;
        color:white;
    }
    .nav-link {
        display: block;
        padding: .3rem .1rem;
    }
    .sub-menu{
        margin-left: 10px;
    }
    .head-title .title{
        font-size: 22px;
        font-weight: bold;
    }
    .graph-group-heading{
        font-size:18px;
        font-weight: bold;
    }
    .card-header{
        background-color: #337AB7;
    }
    .no-padding{
        padding:0px !important;
    }
    .info-box {
        box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);
        border-radius: .25rem;
        background: #fff;
        min-height: 80px;
        padding: .5rem;
        position: relative;
    }
    .d-flex, .info-box, .info-box .info-box-icon {
        display: -ms-flexbox !important;
        display: flex !important;
    }
    .justify-content-center, .info-box .info-box-icon {
        -ms-flex-pack: center !important;
        justify-content: center !important;
    }
    .align-items-center, .info-box .info-box-icon {
        -ms-flex-align: center !important;
        align-items: center !important;
    }
    .info-box .info-box-icon {
        border-radius: 0.25rem;
        display: block;
        font-size: 1.875rem;
        text-align: center;
        width: 70px;
    }
    .info-box .info-box-icon > img {
        max-width: 100%;
    }
    .elevation-1, [class*='sidebar-light-'] .nav-sidebar > .nav-item > .nav-link.active, [class*='sidebar-dark-'] .nav-sidebar > .nav-item > .nav-link.active, .callout {
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24) !important;
        color:white;
    }
    .info-box .info-box-content {
        -ms-flex: 1;
        flex: 1;
        padding: 5px 10px;
    }
    .info-box .progress-description,
    .info-box .info-box-text {
        display: block;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        font-weight: bold;
        font-size: 16px;
    }
    .info-box .info-box-number {
        display: block;
        font-weight: 700;
    }
    .login-heading{
        font-size:19px;
        font-weight: bold;
        margin-bottom: 15px;
        color:#148367;
        text-align: center;
    }
    .align-items-center{
        border-radius: 100px;
    }
    .credit{
        font-size:14px;
        font-weight: bold;
        margin-bottom: 15px;
        text-align: center;
        color:#148367;
        margin-bottom: 3px;
    }
    .credit-logo{
        text-align: center;
    }
    .login-screen {
        padding-top: 15px;
    }
    .card .card-header {
        background: #179978;
        border-bottom: 1px solid #ebedf5;
        font-size: 1rem;
        padding: .75rem .50rem !important;
        position: relative;
        color: white;
    }
    .card .card-header-custom{
        background: #E9EBEC;
        border-bottom: 1px solid #ebedf5;
        font-size: 1rem;
        padding: .35rem 1rem;
        position: relative;
        color: #148367;
    }
    .bootbox-alert{
        color:red;
        font-size:18px;
        font-weight: bold;
    }
    .dashboard_number{
        font-size:12px;
        font-weight: bold;
    }
    .sidebar-dark-primary .nav-sidebar>.nav-item>.nav-link.active, .sidebar-light-primary .nav-sidebar>.nav-item>.nav-link.active {
        background-color: #179978 !important;
        color: #fff;
    }
    .navbar {
        padding: 3px .5rem;
    }
	.graph-group-heading{
		background-color:#DEE1E6;
		color:#007bff!important;
		font-size:18px;
		padding:5px 20px;
	}
	.alert-custom {
		position: relative;
		padding: .15rem 1.25rem;
		margin-bottom: 1rem;
		border: 1px solid transparent;
		border-radius: .25rem;
	}
	.alert-custom-color{
		background-color:#76f7d6;
		color:black;
	}
</style>