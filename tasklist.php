
<div class="col-lg-12">
	<div class="card card-outline card-success">
		<div class="card-header">
		
			<div class="card-tools">
				<button class="btn btn-block btn-sm btn-default btn-flat border-primary" id="new_task"><i class="fa fa-plus"></i> Add New Task</button>
			</div>
			
		</div>
		<div class="card-body">
			<table class="table tabe-hover table-condensed" id="list">
			
				<thead>
					<tr>
						
					</tr>
				</thead>
				<tbody>
					
				
					<tr>
						<td class="text-center"></td>
						<td>
							<p><b></b></p>
							<p class="truncate">></p>
						</td>
						
						<td>
                        	
                        </td>
						<td class="text-center">
							<button type="button" class="btn btn-default btn-sm btn-flat border-info wave-effect text-info dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
		                      Action
		                    </button>
			                    <div class="dropdown-menu" style="">
		                    	<a class="dropdown-item view_task" href="javascript:void(0)" data-id="">View Task</a>
		                    	 <div class="dropdown-divider"></div>
			                 
		                    	<a class="dropdown-item manage_task" href="javascript:void(0)" data-id="">Edit</a>
		                    	 <div class="dropdown-divider"></div>
		                     	<a class="dropdown-item delete_task" href="javascript:void(0)" data-id="">Delete</a>
		                    	 <div class="dropdown-divider"></div>
		                  
			                    <a class="dropdown-item new_progress" data-pid = '' data-tid = ''  data-task = ""  href="javascript:void(0)">Add Progress</a>
		                    	 <div class="dropdown-divider"></div>
		                    	
			                    <a class="dropdown-item view_progress" data-pid = '' data-tid = '<?php echo $row['id'] ?>'  data-task = ''  href="javascript:void(0)">View Progress</a>
								</div>
						</td>
					</tr>	
				<?php endwhile; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<style>
	table p{
		margin: unset !important;
	}
	table td{
		vertical-align: middle !important
	}
</style>
<script>
	$(document).ready(function(){
		$('#list').dataTable()
	$('#new_task').click(function(){
		uni_modal("<i class='fa fa-plus'></i> New Task","manage_task.php",'mid-large')
	})
	$('.view_task').click(function(){
		uni_modal("View Task","view_task.php?id="+$(this).attr('data-id'),'mid-large')
	})
	$('.manage_task').click(function(){
		uni_modal("<i class='fa fa-edit'></i> Edit Task","manage_task.php?id="+$(this).attr('data-id'),'mid-large')
	})
	$('.new_progress').click(function(){
		uni_modal("<i class='fa fa-plus'></i> New Progress for: "+$(this).attr('data-task'),"manage_progress.php?tid="+$(this).attr('data-tid'),'mid-large')
	})
	$('.view_progress').click(function(){
		uni_modal("Progress for: "+$(this).attr('data-task'),"view_progress.php?id="+$(this).attr('data-tid'),'mid-large')
	})
	$('.delete_task').click(function(){
	_conf("Are you sure to delete this task?","delete_employee",[$(this).attr('data-id')])
	})
	})
	function delete_task($id){
		start_load()
		$.ajax({
			url:'ajax.php?action=delete_task',
			method:'POST',
			data:{id:$id},
			success:function(resp){
				if(resp==1){
					alert_toast("Data successfully deleted",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
			}
		})
	}
</script>