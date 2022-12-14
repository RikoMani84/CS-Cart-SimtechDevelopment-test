<p>{__("eway_configuration_note") nofilter}</p>
<hr>

<div class="control-group">
    <label class="control-label cm-required" for="rapid_username">{__("api_key")}:</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][username]" id="rapid_username" value="{$processor_params.username}" class="input-text-large"  size="60" />
    </div>
</div>

<div class="control-group">
    <label class="control-label cm-required" for="rapid_password">{__("api_password")}:</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][password]" id="rapid_password" value="{$processor_params.password}" class="input-text-large"  size="60" />
    </div>
</div>

<div class="control-group">
    <label class="control-label cm-required" for="encryption_key">{__("encryption_key")}:</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][encryption_key]" id="encryption_key" value="{$processor_params.encryption_key}" class="input-text-large"  size="60" />
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="currency">{__("currency")}:</label>
    <div class="controls">
        <select name="payment_data[processor_params][currency]" id="currency">
            <option value="GBP" {if $processor_params.currency == "GBP"}selected="selected"{/if}>{__("currency_code_gbp")}</option>
            <option value="AUD" {if $processor_params.currency == "AUD"}selected="selected"{/if}>{__("currency_code_aud")}</option>
            <option value="NZD" {if $processor_params.currency == "NZD"}selected="selected"{/if}>{__("currency_code_nzd")}</option>
        </select>
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="rapid_mode">{__("test_live_mode")}:</label>
    <div class="controls">
        <select name="payment_data[processor_params][mode]" id="rapid_mode">
            <option value="test" {if $processor_params.mode == "test"}selected="selected"{/if}>{__("test")}</option>
            <option value="live" {if $processor_params.mode == "live"}selected="selected"{/if}>{__("live")}</option>
        </select>
    </div>
</div>
