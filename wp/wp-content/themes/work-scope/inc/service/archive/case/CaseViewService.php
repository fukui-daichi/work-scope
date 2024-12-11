<?php

namespace WorkScope\Inc\Service\Archive\Case;

class CaseViewService
{
  /**
   * カード表示用のデータを生成します
   *
   * @param array $case_list 表示する記事一覧データ
   * @param int $total_posts 総投稿数
   * @param string|null $category 現在のカテゴリースラッグ
   * @param int $start_index 開始インデックス（デフォルト: 0）
   * @return array{
   *   case: array,
   *   is_last_in_set: bool,
   *   should_load_more: bool,
   *   load_more_url: string
   * }[] 表示用に整形されたデータの配列
   */
  public static function prepare_card_list_data(
    array $case_list,
    int $total_posts,
    ?string $category,
    int $start_index = 0
  ): array {
    return array_map(function ($index, $case) use ($total_posts, $category, $start_index) {
      $global_index = $start_index + $index;
      $current_page = self::calculate_current_page($global_index);

      return [
        'case' => $case,
        'is_last_in_set' => self::is_last_in_set($global_index),
        'should_load_more' => self::should_load_more($current_page, $total_posts),
        'load_more_url' => self::generate_load_more_url($current_page + 1, $category),
      ];
    }, array_keys($case_list), $case_list);
  }

  /**
   * 記事の現在のページ番号を計算します
   *
   * @param int $global_index 記事の通し番号（0始まり）
   * @return int 現在のページ番号（1始まり）
   */
  private static function calculate_current_page(int $global_index): int
  {
    return floor($global_index / CaseArchiveService::POSTS_PER_PAGE) + 1;
  }

  /**
   * 現在の記事がセット内の最後の記事かどうかを判定します
   *
   * @param int $global_index 記事の通し番号（0始まり）
   * @return bool 最後の記事の場合はtrue、それ以外はfalse
   */
  private static function is_last_in_set(int $global_index): bool
  {
    return ($global_index % CaseArchiveService::POSTS_PER_PAGE) === (CaseArchiveService::POSTS_PER_PAGE - 1);
  }

  /**
   * さらに記事を読み込む必要があるかどうかを判定します
   *
   * @param int $current_page 現在のページ番号
   * @param int $total_posts 総投稿数
   * @return bool 追加で読み込む記事がある場合はtrue、ない場合はfalse
   */
  private static function should_load_more(int $current_page, int $total_posts): bool
  {
    return $total_posts > ($current_page * CaseArchiveService::POSTS_PER_PAGE);
  }

  /**
   * 追加読み込み用のURLを生成します
   *
   * @param int $next_page 次のページ番号
   * @param string|null $category カテゴリースラッグ（指定がない場合はnull）
   * @return string 生成されたURL
   */
  private static function generate_load_more_url(int $next_page, ?string $category): string
  {
    $base_url = get_template_directory_uri() . "/inc/service/archive/case/LoadMoreCases.php";
    $category_param = !empty($category) ? "&category={$category}" : "";

    return "{$base_url}?page={$next_page}{$category_param}";
  }
}
