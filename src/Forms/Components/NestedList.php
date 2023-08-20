<?php

namespace Mstfkhazaal\NestedList\Forms\Components;

use Filament\Actions\Action;
use Filament\Forms\Components\Field;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;

class NestedList extends Field
{
    protected string $view = 'filament-navigation::components.nested-list';

    public function createNav(): Action
    {
        return Action::make('sendEmail')
            ->form([
                TextInput::make('subject')->required(),
                RichEditor::make('body')->required(),
            ])
            ->action(function (array $data) {
                dd('ss');
            });
    }
}
