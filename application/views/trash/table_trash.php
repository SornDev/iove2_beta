<table class="table table-striped" > <?php foreach($show_in_out  as $data){if($type=='in'){if($data['doc_in_out']=='in'){ if( $data['status']=='hide'){?> <tr class="dc-<?php echo $data['doc_id'];?>"> <th scope="row" width="40"> <?php if($data['doc_in_out']=="in"){ ?> <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span> <?php  } elseif ($data['doc_in_out']=="out") { ?> <span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> <?php } ?> </th> <td class="ls_name<?php echo $data['doc_id']; ?>" data="<?php echo $data['file_scan']; ?>" user="<?php echo $data['id']; ?>" user_type="<?php echo $data['user_type']; ?>"><?php echo $data['name']; ?></td> <td width="90"> <a href="#trash" onclick="restor('<?php echo $data['doc_id'];?>')"><span class="glyphicon glyphicon-retweet" aria-hidden="true"></span></a> <span class="glyphicon glyphicon-option-vertical" aria-hidden="true"></span> <a href="#trash" onclick="del('<?php echo $data['doc_id'];?>')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a> </td> </tr> <?php } } } else if($type=='out'){if($data['doc_in_out']=='out'){ if( $data['status']=='hide'){?> <tr class="dc-<?php echo $data['doc_id'];?>"> <th scope="row" width="40"> <?php if($data['doc_in_out']=="in"){ ?> <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span> <?php  } elseif ($data['doc_in_out']=="out") { ?> <span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> <?php } ?> </th> <td class="ls_name<?php echo $data['doc_id']; ?>" data="<?php echo $data['file_scan']; ?>" user="<?php echo $data['id']; ?>" user_type="<?php echo $data['user_type']; ?>"><?php echo $data['name']; ?></td> <td width="90"> <a href="#trash" onclick="restor('<?php echo $data['doc_id'];?>')"><span class="glyphicon glyphicon-retweet" aria-hidden="true"></span></a> <span class="glyphicon glyphicon-option-vertical" aria-hidden="true"></span> <a href="#trash" onclick="del('<?php echo $data['doc_id'];?>')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a> </td> </tr> <?php }} } else { if( $data['status']=='hide'){?> <tr class="dc-<?php echo $data['doc_id'];?>"> <th scope="row" width="40"> <?php if($data['doc_in_out']=="in"){ ?> <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span> <?php  } elseif ($data['doc_in_out']=="out") { ?> <span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> <?php } ?> </th> <td class="ls_name<?php echo $data['doc_id']; ?>" data="<?php echo $data['file_scan']; ?>" user="<?php echo $data['id']; ?>" user_type="<?php echo $data['user_type']; ?>"><?php echo $data['name']; ?></td> <td width="90"> <a href="#trash" onclick="restor('<?php echo $data['doc_id'];?>')"><span class="glyphicon glyphicon-retweet" aria-hidden="true"></span></a> <span class="glyphicon glyphicon-option-vertical" aria-hidden="true"></span> <a href="#trash" onclick="del('<?php echo $data['doc_id'];?>')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a> </td> </tr> <?php }}} ?> </table>