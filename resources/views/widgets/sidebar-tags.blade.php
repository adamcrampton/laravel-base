<!-- Tags Widget -->
<div class="card my-4">
  <h5 class="card-header">Popular Tags</h5>
  <div class="card-body">
    <div class="row">
      <div class="col-lg-6">
        <ul class="list-unstyled mb-0">
          @foreach($sidebarData['taxonomyData']['tagData'] as $index => $entityValues)
          <li>
            <a href="#">{{ $entityValues->taxonomy_entity_name }}</a>
          </li>
          @endforeach
        </ul>
      </div>
      <div class="col-lg-6">
        <ul class="list-unstyled mb-0">
          <li>
            <a href="#">{{-- 2nd column --}}</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>