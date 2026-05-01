<x-mylayouts.layout-prototype :showSideBar="false" :col="12">


    	@include('pages.prototype.users.portfolio.mini-profile')


        <livewire:portfolio.portfolio :chef="$chef" />

<style>
    .recipe-list {
        width: 100%;
        height: 300px;
        object-fit: cover;
        display: block;
    }

    

    body {
      margin-left: 400px !important;
    }
</style>

            <x-additional.slider :collection="$featured_data" id="featured-slider" title="Featured Recipes" items=3 />


</x-mylayouts.layout-prototype>