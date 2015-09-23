<form class="" id="shelter-providers-details" method="post">
	<div class="console"></div>
	<h3>Please choose how you can help below:</h3>
	<div class="user-choice">
		<div class="choice-button">
			<input id="choice-bed" type="radio" value="Bed" name="<?= RefugeeBnb::NAME?>[Shelter][how]" checked>
			<label for="choice-bed" data-fragment="4" class="choice-offer-bed">I can offer a bed for a year</label>
		</div>
		<div class="choice-button">
			<input id="choice-other" type="radio" value="Other" name="<?= RefugeeBnb::NAME?>[Shelter][how]">
			<label for="choice-other" data-fragment="1" class="choice-help-other-ways">I would like to help in other ways</label>
		</div>
	</div>
	<div>
		<div class="always-collect">
			<div class="form-header"  data-fragment="31">About you</div>
			<div class="form-group">
				<input type="text" class='form-control' name="<?= RefugeeBnb::NAME?>[Shelter][name]"
					placeholder="Name" data-fragment="18" />
				<div class="hint"></div>
			</div>
		</div>
		<div class="help-other-ways-container">
			<div class="form-header" data-fragment="32">
				How you can help
			</div>
			<div class="form-group">
				<select name="<?= RefugeeBnb::NAME?>[Shelter][other]">
					  <option selected disabled>Select</option>
					  <option value="Technology">Technology (phones/laptops/tablets)</option>
					  <option value="Meals">Meals</option>
					  <option value="Clothing">Clothing</option>
					  <option value="Bedding">Bedding</option>
					  <option value="Kitchen utensils">Kitchen utensils</option>
					  <option value="Hygiene/Toiletries">Hygiene/Toiletries</option>
					  <option value="Medical skills">Medical skills</option>
					  <option value="Social work skills">Social work skills</option>
					  <option value="Language skills">Language skills</option>
					  <option value="Legal skills">Legal skills</option>
					  <option value="Technical skills">Technical skills</option>
					  <option value="Donate money">Donate money</option>
					</select>
				<div class="hint"></div>
			</div>
		</div>

		<div class="offer-bed-information">
			<div class="notice" data-fragment="33">
				This is to provide a bed for a year, starting from Jaunary 1st, 2016
			</div>
			<div class="about-you-form">
				<div class="custom-container width-50">
					<div class="form-header"  data-fragment="17">About your home</div>
					<div class="form-group">
						<textarea type="text" class='form-control' name="<?= RefugeeBnb::NAME?>[Shelter][address]"
							placeholder="Address" data-fragment="19"
						></textarea>
						<div class="hint"></div>
					</div>
					<div class="form-group">
						<textarea type="text" class='form-control' name="<?= RefugeeBnb::NAME?>[Shelter][langs]"
							placeholder="Languages in Household" data-fragment="23"
						></textarea>
						<div class="hint"></div>
					</div>
					<div class="form-group">
						<textarea type="text" class='form-control' name="<?= RefugeeBnb::NAME?>[Shelter][house]"
							placeholder="Tell us about your household" data-fragment="24"
						></textarea>
						<div class="hint"></div>
					</div>
				</div>
				<div class="custom-container padded-left">
					<div class="form-header" data-fragment="20">2016 Residents</div>
					<div class="residents-container">
						<div class="input-container">
							<label>Adults: </label>
							<select name="<?= RefugeeBnb::NAME?>[Shelter][adults]">
							  <option selected disabled>Select</option>
							  <option value="0">0</option>
							  <option value="1">1</option>
							  <option value="2">2</option>
							  <option value="3">3</option>
							  <option value="4">4</option>
							  <option value="5">5</option>
							  <option value="6">6</option>
							  <option value="7">7</option>
							  <option value="8">8</option>
							  <option value="9">9</option>
							  <option value="10">10</option>
							</select>
							<div class="hint"></div>
						</div>
						<div class="input-container">
							<label>Children: </label>
							<select name="<?= RefugeeBnb::NAME?>[Shelter][children]">
								<option selected disabled>Select</option>
								<option value="0">0</option>
								<option value="1">1</option>
							  <option value="2">2</option>
							  <option value="3">3</option>
							  <option value="4">4</option>
							  <option value="5">5</option>
							  <option value="6">6</option>
							  <option value="7">7</option>
							  <option value="8">8</option>
							  <option value="9">9</option>
							  <option value="10">10</option>
							</select>
							<div class="hint"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="offer-rooms">
				<div class="form-group">
					<label class="form-header" data-fragment="13">How many rooms do you have?</label>
					<select name="<?= RefugeeBnb::NAME?>[Shelter][rooms]">
					  <option selected disabled>Select</option>
					  <option value="1">1</option>
					  <option value="2">2</option>
					  <option value="3">3</option>
					  <option value="4">4</option>
					  <option value="5">5</option>
					  <option value="6">6</option>
					  <option value="7">7</option>
					  <option value="8">8</option>
					  <option value="9">9</option>
					  <option value="10">10</option>
					</select>
					<div class="hint"></div>
				</div>
				<div id="room-details"></div>
				<div class="form-group template" id="room-template">
					<h3 class="section-subtitle">Room <span class='num'>#num</span></h3>
					<table class="table-responsive">
						<table class="table barren-table">
							<thead>
								<tr>
									<th data-fragment="14">Bed Type</th>
									<th data-fragment="15">How Many beds</th>
									<th data-fragment="16">Suited for</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Single</td>
									<td>
										<select class="select-60" name="<?= RefugeeBnb::NAME?>[Shelter][single][:x]">
										  <option value="0">0</option>
										  <option value="1">1</option>
										  <option value="2">2</option>
										  <option value="3">3</option>
										  <option value="4">4</option>
										  <option value="5">5</option>
										</select>
									</td>
									<td>
										<input type="radio" value="child" name="<?= RefugeeBnb::NAME?>[Shelter][single-type][:x]"/> <span data-fragment="21">Child</span><br />
										<input type="radio" value="adult" name="<?= RefugeeBnb::NAME?>[Shelter][single-type][:x]"/> <span data-fragment="22">Adult</span><br />
										<input type="radio" value="both" name="<?= RefugeeBnb::NAME?>[Shelter][single-type][:x]" checked/> <span data-fragment="29">Both</span>
									</td>
								</tr>
								<tr>
									<td>Double</td>
									<td>
										<select class="select-60" name="<?= RefugeeBnb::NAME?>[Shelter][double][:x]">
										  <option value="0">0</option>
										  <option value="1">1</option>
										  <option value="2">2</option>
										  <option value="3">3</option>
										  <option value="4">4</option>
										  <option value="5">5</option>
										</select>
									</td>
									<td>
										<input type="radio" value="child" name="<?= RefugeeBnb::NAME?>[Shelter][double-type][:x]"/> <span data-fragment="21">Child</span><br />
										<input type="radio" value="adult" name="<?= RefugeeBnb::NAME?>[Shelter][double-type][:x]"/> <span data-fragment="22">Adult</span><br />
										<input type="radio" value="both" name="<?= RefugeeBnb::NAME?>[Shelter][double-type][:x]" checked/> <span data-fragment="29">Both</span>
									</td>
								</tr>
							</tbody>
						</table>
					</table>
					<div class="hint"></div>
				</div>
			</div>
		</div>
	</div>
	<div>
		<div class="form-group ">
			<button type="submit" class="btn btn-lg btn-app"> <span data-fragment="5">Submit</span></button>
		</div>
	</div>
</form>