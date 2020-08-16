@extends('master.master')

@section('content')
<section class="section-divider textdivider divider7">
  <div class="container">
    <div class="row">
      <div class="text-center white wow animated fadeInRight">
        <h2> About Awardingly </h2>
      </div>
    </div>
  </div>
</section>

<div class="container about-container">
  <div class="col-md-10 col-md-offset-1">
    <div class="col-md-4 about-sidebar">
      @include('pages.sidebar._about')
    </div>
    <div class="col-md-8 about-text">
      <h4>Redefining the Awards Industry</h4>
      <p>Awards make the world go round. Awardingly gives awards a <br> helping hand through innovative and creative technology <br> solutions that drive the digital economy today.</p>
      <br>
      <h3>We're challenging the status quo <br> and promoting powerful relationships <br> within the industries we serve in.</h3>
      <p>By 2020, we would have helped millions of people around the <br> world to empower their lives and provide them better access to <br> participation and involvement in things that they are passionate <br> about.</p>
      <br>
      <br>
      <span>COMPANY INFORMATION</span>
      <p>We specialise in technical solutions, creative content, and digital <br> strategy to empower the sports and fitness industry to be more <br> robust. <br>
        <br> We form strategic partnerships with our clients, working closely <br> with them to develop digital solutions that are fully integrated <br> with their businesses and organizations. We have a diverse roster <br> of clients from all around the world and what they all have in <br> common is a firm desire to succeed in the digital economy today.</p>

      </div>
    </div>
  </div>

  @stop
