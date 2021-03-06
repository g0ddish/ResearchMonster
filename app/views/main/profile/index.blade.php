<div class="col-md-12" style="height: 100%; background-color: #55AA55; padding-top:60px;">
<div class="col-md-3">
<?php if(!is_null($user->avatar)): ?>
       {{ HTML::image($user->avatar, 'avatar', array('class' => 'img-responsive', 'width' => '256px', 'height' => '256px')) }}
<?php else: ?>
<img src="http://placehold.it/256x256">
<?php endif; ?>
</div>
<div class="col-md-3">
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Basic Info</h3>
  </div>
  <div class="panel-body">
  <p><h3><span class="label label-default"><?php echo $user->first_name . " " . $user->last_name; ?></span></h3></p>
   <?php
   $groups = $user->getGroups();
   $uprograms = $user->programs()->get();
   foreach($uprograms as $program){
   echo "<p><span class='label label-default'>$program->ProgramName</span></p>";
   }
   foreach($groups as $group):
    ?>
    <span style="position: relative" class="label label-primary"><?php if($group->name == "Administrator"):?><img width="16px" class='img-responsive' style="position:absolute;  left: -9px;
                                                                                                                                                         top: -5px" src="{{asset('img/monsters/mon2small.png')}}"/><?php endif; echo $group->name; ?></span>

<?php endforeach; ?>
  </div>
</div>
</div>
<div class="col-md-6">
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Past Projects</h3>
  </div>
  <div class="panel-body">
    None
  </div>
</div>
</div>
<div class="col-md-12" style="margin-top:5px;">
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Summary</h3>
  </div>
  <div class="panel-body">
    {{$user->summary}}
  </div>
</div>
</div>
<div class="col-md-12">
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Skills</h3>
  </div>
  <div class="panel-body">
    Panel content
  </div>
</div>
</div>
<div class="col-md-12">
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Experience</h3>
  </div>
  <div class="panel-body">
    {{$user->experience}}
  </div>
</div>
</div>
</div>