<?php

namespace App\Admin\Controllers;

use App\Models\Player;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class PlayerController extends Controller
{
    use HasResourceActions;

    /**
     * Index interface.
     *
     * @param Content $content
     * @return Content
     */
    public function index(Content $content)
    {
        return $content
            ->header(trans('admin.index'))
            ->description(trans('admin.description'))
            ->body($this->grid());
    }

    /**
     * Show interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function show($id, Content $content)
    {
        return $content
            ->header(trans('admin.detail'))
            ->description(trans('admin.description'))
            ->body($this->detail($id));
    }

    /**
     * Edit interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function edit($id, Content $content)
    {
        return $content
            ->header(trans('admin.edit'))
            ->description(trans('admin.description'))
            ->body($this->form()->edit($id));
    }

    /**
     * Create interface.
     *
     * @param Content $content
     * @return Content
     */
    public function create(Content $content)
    {
        return $content
            ->header(trans('admin.create'))
            ->description(trans('admin.description'))
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Player);

        $grid->id('ID');
        $grid->first_name('first_name');
        $grid->last_name('last_name');
        $grid->call_name('call_name');
        $grid->birth_place('birth_place');
        $grid->birth_date('birth_date');
        $grid->address('address');
        $grid->current_football_sch('current_football_sch');
        $grid->father_name('father_name');
        $grid->mother_name('mother_name');
        $grid->identity_type('identity_type');
        $grid->identity('identity');
        $grid->blood_type('blood_type');
        $grid->gender('gender');
        $grid->weight('weight');
        $grid->height('height');
        $grid->created_at(trans('admin.created_at'));
        $grid->updated_at(trans('admin.updated_at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Player::findOrFail($id));

        $show->id('ID');
        $show->first_name('first_name');
        $show->last_name('last_name');
        $show->call_name('call_name');
        $show->birth_place('birth_place');
        $show->birth_date('birth_date');
        $show->address('address');
        $show->current_football_sch('current_football_sch');
        $show->father_name('father_name');
        $show->mother_name('mother_name');
        $show->identity_type('identity_type');
        $show->identity('identity');
        $show->blood_type('blood_type');
        $show->gender('gender');
        $show->weight('weight');
        $show->height('height');
        $show->created_at(trans('admin.created_at'));
        $show->updated_at(trans('admin.updated_at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Player);

        $form->display('ID');
        $form->text('first_name', 'first_name');
        $form->text('last_name', 'last_name');
        $form->text('call_name', 'call_name');
        $form->text('birth_place', 'birth_place');
        $form->text('birth_date', 'birth_date');
        $form->text('address', 'address');
        $form->text('current_football_sch', 'current_football_sch');
        $form->text('father_name', 'father_name');
        $form->text('mother_name', 'mother_name');
        $form->text('identity_type', 'identity_type');
        $form->text('identity', 'identity');
        $form->text('blood_type', 'blood_type');
        $form->text('gender', 'gender');
        $form->text('weight', 'weight');
        $form->text('height', 'height');
        $form->display(trans('admin.created_at'));
        $form->display(trans('admin.updated_at'));

        return $form;
    }
}
