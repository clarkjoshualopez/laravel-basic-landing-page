@extends('layouts.app')

@section('content')
<!-- hero section -->
  <x-hero-section />

<!-- services section -->
  <x-services-section />

<!-- CTA -->
  <x-cta-section />

<!-- Portfolio/Projects section -->
  <x-projects-section :projects="$projects" />

<!-- Team section -->
  <x-team-section :teamMembers="$teamMembers" />
  
<!-- Contact section -->
  <x-contact-section />

@endsection