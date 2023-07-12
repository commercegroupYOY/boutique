@extends('layout.layout')




@section('title')
Notre équipe @endsection

@section('content')


<div class="py-6"></div>
<h1 class="text-4xl text-center ps-20  hover:uppercase" > Une équipe de choc </h1>
</div>

<div class=" flex justify-center items-center">

<p class=" m-9 text-l max-w-prose  text-center">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tincidunt elit vitae semper fermentum. Etiam euismod dui eget dignissim aliquet. Cras rutrum tortor ut urna sollicitudin vulputate. Etiam eleifend nulla ut arcu dignissim, vel placerat metus pharetra. Phasellus accumsan quis quam eget commodo. Mauris sed finibus mauris. In eu diam sapien. Donec tellus urna, vestibulum at vehicula quis, ullamcorper ullamcorper tortor. Praesent iaculis elementum egestas. Vestibulum id nulla augue. Donec lacinia vehicula sapien mattis pulvinar.

Integer dignissim blandit ligula, id aliquam dolor malesuada sit amet. Ut rutrum quis leo id laoreet. Maecenas orci neque, viverra vitae quam at, suscipit elementum est. Suspendisse mi lectus, iaculis vel sapien pharetra, feugiat varius velit. Proin venenatis hendrerit volutpat. Fusce in facilisis velit. Pellentesque a dolor aliquam, porta tortor vel, tempor ex.

Aliquam ut augue egestas, lobortis lorem ac, pharetra mi. Aliquam erat volutpat. Morbi lacinia felis massa, eget maximus ipsum gravida vitae. Mauris quis aliquam mauris. Ut congue, orci nec tristique dictum, turpis eros gravida dui, in mattis sem risus eu diam. Vivamus nec gravida felis, sit amet fringilla metus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent egestas sollicitudin massa at luctus. Phasellus id vulputate augue. Phasellus viverra purus ante. Donec sollicitudin risus magna, id ultricies ex vestibulum et. Aliquam porta placerat ligula vitae condimentum.

</p>
</div>
@endsection



@section('cardEquipe')

<div class="md:flex space-x-4 mt-3 ml-8 mr-8">

    <div
    class="block rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] flex-auto mb-3">
    <a href="#!">
      <img
        class="rounded-t-lg"
        src="https://tecdn.b-cdn.net/img/new/standard/nature/184.jpg"
        alt="" />
    </a>
    <div class="p-6">
      <h5
        class="mb-2 text-xl font-medium leading-tight text-neutral-800">
        Olivier
      </h5>
      <p class="mb-4 text-base text-neutral-600">
        Some quick example text to build on the card title and make up the
        bulk of the card's content.
      </p>

    </div>
  </div>


    <div
    class="block rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] flex-auto">
    <a href="#!">
      <img
        class="rounded-t-lg"
        src="https://tecdn.b-cdn.net/img/new/standard/nature/184.jpg"
        alt="" />
    </a>
    <div class="p-6">
      <h5
        class="mb-2 text-xl font-medium leading-tight text-neutral-800">
        Youness
      </h5>
      <p class="mb-4 text-base text-neutral-600">
        Some quick example text to build on the card title and make up the
        bulk of the card's content.
      </p>

    </div>
  </div>



    <div
    class="block rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] flex-auto">
    <a href="#!">
      <img
        class="rounded-t-lg"
        src="https://tecdn.b-cdn.net/img/new/standard/nature/184.jpg"
        alt="" />
    </a>
    <div class="p-6">
      <h5
        class="mb-2 text-xl font-medium leading-tight text-neutral-800">
        Yan
      </h5>
      <p class="mb-4 text-base text-neutral-600">
        Some quick example text to build on the card title and make up the
        bulk of the card's content.
      </p>

    </div>
  </div>





</div>

 @endsection

