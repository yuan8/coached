<div class="col-md-12">
    <div class="card">
    <div class="card-body" style="background-image: url('https://i.pinimg.com/originals/6d/9f/a9/6d9fa9355eccc27478bf914c97dd7cec.jpg');">
        <div class="row"> 
            <div class="col-md-12  margin-b-15 text-center">
			    <img src="{{url(Auth::user()->avatar)}}" class="img-circle col-4 col-sm-6 col-md-2" id="cover-photo-user-trigger-change" style=" background: #fff;" onclick="$('#avatar-source').click();" data-toggle="tooltip" data-placement="right" title="" data-original-title="Change">
			    <h5>{{Auth::user()->username}}</h5>
			    <h6>{{Auth::user()->email}}</h6>
			    <input style="display: none;" id="avatar-source" type="file" accept="image/png, image/jpeg" name="" onchange="renderAvatar(this)">

			</div>
        </div>
    </div>
</div>
</div>



<script type="text/javascript">
	   $image = $('#modal-change-avatar #image-container-crop');

		var $cropperd='';
		function renderAvatar(dom){
		var input=$(dom)[0];
		if (input.files && input.files[0]) {
	    var reader = new FileReader();
	    reader.onload = function (e) {
	   		var image = $('#modal-change-avatar #image-container-crop');
	   		$('#modal-change-avatar #image-container-crop')
	        .attr('src', e.target.result);
	        
	    };
	    reader.readAsDataURL(input.files[0]);
	    setTimeout(function(){
		// $ava_basic_crop.croppie('setZoom', 0);
	   		$image = $('#modal-change-avatar #image-container-crop');
			  $cropperd = $image.cropper({
			  aspectRatio: 16 / 16,
			  viewMode:2,
			  crop(event) {
			    
			  },
		});

	    },200);

		$('#modal-change-avatar').appendTo('body').modal();
	  }
	
	}
		
	function uploadava(){
		$cropperd=$image.data('cropper');
		var d= $cropperd.getCroppedCanvas().toDataURL('image/jpeg');
		$cropperd.getCroppedCanvas().toBlob((blob) => {
			 const formData = new FormData();
	  		formData.append('ava', blob);
    		

			api_coach.post('/setting/update-ava',formData,{
				onUploadProgress:function(progressEvent){
						var percentCompleted = Math.round( (progressEvent.loaded * 100) / progressEvent.total );
				       console.log("Progress:-"+percentCompleted);
				    
				},
			}).then(function(response){
				$('#cover-photo-user-trigger-change').attr('src',d);
				// location.reload();
				

			});

		});
	}


</script>

<div id="modal-change-avatar" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Crop Avatar</h4>
      </div>
      <div class="modal-body">
        <div class="row">
        	<div class="col-md-12">
        		<img src="" id="image-container-crop" class="img-responsive" style="width: 100%;">
        	</div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" onclick="uploadava()">Update</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>