					

							<div id="theme_gallery_settings">
								<?php
									$gallery_items = get_option("".$theme_name."_show_gallery_items");
									$ministries_items = get_option("".$theme_name."_show_ministries_items");
								?>
								<form method="post" action=""  id="gallery_settings">
									<input type="hidden" name="action" value="gallery_settings"/>
									<table>
									
										<tr class="item">
											<td class="label">Items per gallery page:</td>
											<td class="setting">
												<span class="input-text-1"><input class="input-text-1" type="text" name="show_gallery_items" value="<?php echo $gallery_items;?>" style="width: 261px;"/></span>
											</td>
										</tr>
										<tr class="item">
											<td class="label">Items per ministries page:</td>
											<td class="setting">
												<span class="input-text-1"><input class="input-text-1" type="text" name="show_ministries_items" value="<?php echo $ministries_items;?>" style="width: 261px;"/></span>
											</td>
										</tr>
										<tr class="item last">
											<td class="label"></td>
											<td class="setting"><p><a href="javascript:{}" onclick="document.getElementById('gallery_settings').submit(); return false;" class="btn-2"><span>Save Changes</span></a></p></td>
										</tr>
										
									</table>
								</form>
							</div>