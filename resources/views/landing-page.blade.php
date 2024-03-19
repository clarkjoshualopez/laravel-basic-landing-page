@extends('layouts.app')

@section('content')
<!-- hero section -->
  <!-- Component URL: https://www.figma.com/file/BzrSni6dTrsPLvu74sTusm/Flex-UI-library-for-Tailwind-CSS-(Community)?type=design&node-id=164-3376&mode=design&t=eqoSuiZ3NLGC4red-0 -->
  <x-hero-section />

<!-- services section -->
  <!-- Component URL: https://www.figma.com/file/BzrSni6dTrsPLvu74sTusm/Flex-UI-library-for-Tailwind-CSS-(Community)?type=design&node-id=628-22200&mode=design&t=tmq0OrMJXNuCHp8M-0 -->
  <x-services-section />

<!-- CTA -->
  <!-- Component URL: https://www.figma.com/file/BzrSni6dTrsPLvu74sTusm/Flex-UI-library-for-Tailwind-CSS-(Community)?type=design&node-id=628-22200&mode=design&t=tmq0OrMJXNuCHp8M-0 -->
  <x-cta-section />

<!-- Portfolio/Projects section -->
  <!-- Component URL: https://www.figma.com/file/BzrSni6dTrsPLvu74sTusm/Flex-UI-library-for-Tailwind-CSS-(Community)?type=design&node-id=628-22200&mode=design&t=tmq0OrMJXNuCHp8M-0 -->
  <x-projects-section :projects="$projects" />

<!-- Team section -->
  <!-- Component URL: https://www.figma.com/file/BzrSni6dTrsPLvu74sTusm/Flex-UI-library-for-Tailwind-CSS-(Community)?type=design&node-id=360-5318&mode=design&t=vP2CBFMGQBEC59C4-0 -->
  <x-team-section :teamMembers="$teamMembers" />
  
<!-- Contact section -->
  <!-- Component URL: https://www.figma.com/file/BzrSni6dTrsPLvu74sTusm/Flex-UI-library-for-Tailwind-CSS-(Community)?type=design&node-id=628-22200&mode=design&t=tmq0OrMJXNuCHp8M-0 -->
  <x-contact-section />

@endsection