<?php

namespace dhope0000\LXDClient\Controllers\InstanceSettings;

use dhope0000\LXDClient\Tools\InstanceSettings\SaveSettings;

class SaveAllSettingsController implements \dhope0000\LXDClient\Interfaces\RecordAction
{
    private $saveSettings;

    public function __construct(SaveSettings $saveSettings)
    {
        $this->saveSettings = $saveSettings;
    }

    public function saveAll(array $settings)
    {
        $this->saveSettings->save($settings);
        return ["state"=>"success", "message"=>"Saved Settings"];
    }
}
