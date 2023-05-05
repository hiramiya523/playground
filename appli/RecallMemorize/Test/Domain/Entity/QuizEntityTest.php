<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class QuizEntityTest extends TestCase {
	private $r_data = null;
	public function setUp():void {
		// 初期データ
		$this->r_data = [
			"quiz" => new Question("年齢は？"),
			"ans" => new Answer("90"),
			"create_dt" => new DateTimeImmutable(),
			"update_dt" => new DateTimeImmutable()
		];
	}

	/**
	 * クイズオブジェクトが生成出来る
	 * @test
	 *
	 * @return void
	 */
	public function test_instance():void {
		$quiz_ent = new QuizEntity(
			$this->r_data["quiz"],
			$this->r_data["ans"],
			$this->r_data["create_dt"],
			$this->r_data["update_dt"]
		);
		$this->assertTrue($quiz_ent instanceof QuizEntity);
	}

	// クイズと解答を出力出来る
}