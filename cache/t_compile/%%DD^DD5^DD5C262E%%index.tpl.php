<?php /* Smarty version 2.6.26, created on 2016-11-17 12:31:47
         compiled from contact/index.tpl */ ?>
<?php echo ''; ?><?php $this->assign('pageTitle', 'Contact Us'); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<div class="row contact">
	<div class="col-md-4">
		<?php if ($this->_tpl_vars['captcha_mismatched']): ?><span style="color: red;">Captcha code you entered is incorrect.</span><br/><?php endif; ?>
		<?php if ($this->_tpl_vars['not_valid_email']): ?><span style="color: red;">Please enter a valid email</span><br/><?php endif; ?>
		<?php if ($this->_tpl_vars['not_valid_subject']): ?><span style="color: red;">Please enter subject</span><br/><?php endif; ?>
		<?php if ($this->_tpl_vars['sent_sucessfully']): ?><span><strong>Your message has been successfully submitted.</strong></span><?php endif; ?>
		<form action="" id="contact-form" method="post">
			<fieldset>
				<div class="control-group">
					<label class="control-label" for="name">Your Name</label>
					<div class="controls">
						<input type="text" name="name" id="name">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="email">Email Address</label>
					<div class="controls">
						<input type="text" name="email" id="email">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="subject">Subject</label>
					<div class="controls">
						<input type="text" name="subject" id="subject">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="subject">Query</label>
					<div class="controls">
						<select class="form-control" name="query">
						<option value="editorial">Editorial</option>
						<option value="technical">Technical</option>
						<option value="asd">Advertisements/ Subscription/Donations</option>
					      </select>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="message">Your Message</label>
					<div class="controls">
						<textarea style="min-height: 75px;" name="message" id="message" rows="3"></textarea>
					</div>
				</div>
								<div class="control-group">
					<img src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/<?php echo $this->_tpl_vars['captcha_img']; ?>
">
				</div>
				<input type="hidden" name="captcha_code_hash" value="<?php echo $this->_tpl_vars['captcha_hash']; ?>
">
				<div class="control-group">
					<input type="text" name="captcha_code" placeholder="Please enter the above captcha">
				</div>
				<div class="control-group">
					<input style="width:76px;" type="submit"  class="button" name="submit_response" value="Submit">
					<!-- <button type="reset" class="btn">
						Cancel
					</button> -->
				</div>
				
			</fieldset>
		</form>

		<script>
			$(document).ready(function() ,
						email : ,
						subject : ,
						message : 
					},
					highlight : function(element) ,
					success : function(element) 				});
			});
		</script>
	</div>
	<div class="col-md-8 address-map">
		<h4>Address</h4>

		<table class="table table-striped">
			<tr>
				<td>
					Registered office:
				</td>
				<td>
					Forum for Medical Ethics Society, 0-18, Bhavna, Veer Savarkar Marg, Prabhadevi, Mumbai - 400 025 INDIA.
				</td>
			</tr>
			<tr>
				<td>
					Operational office:
				</td>
				<td>
					Indian Journal of Medical Ethics, c/o Cehat Survey 2804-5, Aram Society Road, Vakola, Santacruz (E), Mumbai - 400 055.
				</td>
			</tr>
			<tr>
				<td>
					Editorial correspondence:
				</td>
				<td>
					<a href="mailto:ijme.editorial@gmail.com">ijme.editorial@gmail.com</a>
				</td>
			</tr>
			<tr>
				<td>
					Subscription correspondence:
				</td>
				<td>
					<a href="mailto:ijmemumbai@gmail.com">ijmemumbai@gmail.com</a>
				</td>
			</tr>
			<tr>
				<td>
					Telephone:
				</td>
				<td>
					07506265856
				</td>
			</tr>
		</table>

		<!-- <h4>View map</h4>
		<div class="row">
			<div class="col-md-12">
				<iframe style="border: 1px solid rgb(194, 194, 194); border-radius: 5px;" width="99%" height="295" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=aram+society+vakola&amp;aq=&amp;sll=19.079998,72.854502&amp;sspn=0.01454,0.026157&amp;ie=UTF8&amp;hq=&amp;hnear=Aaram+Society,+St+Anthony+Rd,+Vakola,+Mumbai+Suburban,+Maharashtra+400055&amp;ll=19.07884,72.85531&amp;spn=0.001818,0.00327&amp;t=m&amp;z=14&amp;output=embed"></iframe>
			</div>
		</div> -->
	</div>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
