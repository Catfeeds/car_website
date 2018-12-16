<?php

namespace App\Admin\Controllers;

use App\Models\Good;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;
use App\Models\BranchInfo;

class GoodsController extends Controller
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
            ->header('商品')
            ->description('列表')
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
            ->header('Detail')
            ->description('description')
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
            ->header('商品')
            ->description('修改')
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
            ->header('商品')
            ->description('新增')
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Good);
        $grid->model()->orderBy('branch_id')->orderBy('sort');
        $grid->name('商品名称');
        $grid->price('价格');
        $grid->sort('排序');
        $grid->is_show('是否展示')->switch();
        $grid->disableExport();
        $grid->filter(function($filter){
            $filter->disableIdFilter();
            $filter->like('name', '商品名称');
        });
        $grid->actions(function ($actions) {
                $actions->disableView();
            });
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
        $show = new Show(Good::findOrFail($id));

        $show->id('Id');
        $show->branch_id('Branch id');
        $show->name('商品名称');
        $show->price('价格');
        $show->content('Content');
        $show->sort('排序');
        $show->is_show('是否展示')->switch();

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Good);

        $form->select('branch_id', '所属分公司')->options(BranchInfo::all()->pluck('name','id'))->rules('required',[
                    'required'=>'不能为空'
            ]);
        $form->text('name', '商品名称')->rules('required',[
                    'required'=>'不能为空'
            ]);
        $form->image('image', '封面图片')->rules('required',[
                    'required'=>'不能为空'
            ]);
        $form->multipleImage('banner', '详情轮播图')->removable();
        $form->text('price', '价格')->rules('required',[
                    'required'=>'不能为空'
            ]);
        $form->text('abstract', '简短介绍')->rules('required',[
                    'required'=>'不能为空'
            ]);
        $form->editor('content', '图文详情')->rules('required',[
                    'required'=>'不能为空'
            ]);
        $form->number('sort', '排序')->default(50);
        $form->switch('is_show', '是否展示');
        $form->tools(function (Form\Tools $tools) {


            // 去掉`删除`按钮
            $tools->disableDelete();

            // 去掉`查看`按钮
            $tools->disableView();
        });
        $form->footer(function ($footer) {

            // 去掉`重置`按钮
            $footer->disableReset();

            // 去掉`查看`checkbox
            $footer->disableViewCheck();

            // 去掉`继续编辑`checkbox
            $footer->disableEditingCheck();
            // 去掉`继续创建`checkbox
            $footer->disableCreatingCheck();

        });
        return $form;
    }
}
