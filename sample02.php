<?php
DB::beginTransaction();

try {
	$block = new Block();

	$block->create([
		'aaaaa'     => $input['aaaa'],
		'bbb'   => $input['bbb'],
		'cccc' => $input['cccc'],
		'dddd'  => $input['dddd'],
		'eeee'  => $input['eeee'],
		'ffff'    => $input['ffff'],
	]);

	DB::commit();

	$message = '追加しました';

	return redirect(route('index'))->with('flash_message', $message);
} catch (\Exception $e) {
	Log::warning($e->getMessage());
	DB::rollback();

	$message = "追加できませんでした。\nお手数ですが再度やり直してください。";

	return redirect(route('index'))->with('failure_message', $message);
}