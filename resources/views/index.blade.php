<x-app-layout>
  <x-slot name="title">Welcome </x-slot>
  <x-slot name="content">
    <x-header :year="$year" />

    <div class="content-area">
      <div class="animated-sections">
        <x-home-section />

        <x-about-section>
          <x-slot name="age">{{ $age }}</x-slot>
        </x-about-section>

        <x-resume-section />

        <x-portfolio-section />

        <x-contact-section />
      </div>
    </div>
  </x-slot>
</x-app-layout>
