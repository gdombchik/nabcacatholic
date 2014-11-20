							<!-- BEGIN .theme_blog_settings -->	
							<div id="theme_blog_settings">
								<form method="post" action=""  id="blog_settings">
									<input type="hidden" name="action" value="blog_settings"/>
									<table>
										<tr class="item">
										<?php
											$show_first_thumb = get_option("".$theme_name."_show_first_thumb");
											$show_single_thumb = get_option("".$theme_name."_show_single_thumb");
											$no_image_thumb = get_option("".$theme_name."_show_no_image_thumb");
										?>
											<td colspan="2">
												<div>
													<p class="label"><b>Post Thumbnail</b></p>
												</div>
												
												<div>
													<p class="label"><span>Show thumbnails in blog post list:</span></p>
													<div class="setting">
														<input type="checkbox" name="show_first_thumb" class="styled"  <?php if($show_first_thumb == "on") { echo 'checked="yes"'; } ?>/>
													</div>
												</div>
												
												<div>
													<p class="label"><span>Show thumbnail in open post:</span></p>
													<div class="setting">
														<input type="checkbox" name="show_single_thumb" class="styled"  <?php if($show_single_thumb == "on") { echo 'checked="yes"'; } ?>/>
													</div>
												</div>	
												
												<div>
													<p class="label"><span>Show "no image" thumbnail, when no thumbnail is available:</span></p>
													<div class="setting">
														<input type="checkbox" name="show_no_image_thumb" class="styled"  <?php if($no_image_thumb == "on") { echo 'checked="yes"'; } ?>/>
													</div>
												</div>
												
											</td>
										</tr>
										
										<tr class="item">
										<?php
											$show_first_pictures = get_option("".$theme_name."_show_first_pictures");
											$show_first_objects = get_option("".$theme_name."_show_first_objects");
										?>
											<td colspan="2">
												<div>
													<p class="label"><b>Post settings</b></p>
												</div>
												
												<div>
													<p class="label"><span>Show pictures in post list page:</span></p>
													<div class="setting">
														<input type="checkbox" name="show_first_pictures" class="styled"  <?php if($show_first_pictures == "on") { echo 'checked="yes"'; } ?>/>
													</div>
												</div>
												
												<div>
													<p class="label"><span>Show other objects on post list page (videos etc.):</span></p>
													<div class="setting">
														<input type="checkbox" name="show_first_objects" class="styled"  <?php if($show_first_objects == "on") { echo 'checked="yes"'; } ?>/>
													</div>
												</div>	
												
												
											</td>
										</tr>
										<tr class="item last">
											<td class="label"></td>
											<td class="setting"><p><a href="javascript:{}" onclick="document.getElementById('blog_settings').submit(); return false;" class="btn-2"><span>Save Changes</span></a></p></td>
										</tr>
										
									</table>
								</form>
							
							<!-- END .theme_blog_settings -->	
							</div>	