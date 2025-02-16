# Work Scope

## 🌐 概要

- **URL**: [https://work-scope.denv.site/](https://work-scope.denv.site/)
- **用途**: コーポレートサイト
- **主な機能**: コンテンツ管理（実績紹介、お知らせ）、お問い合わせフォーム

## 🗺 サイトマップ

- トップ: `/`
- 企業情報: `/company`
- 事業内容: `/service`
- 実績紹介: `/case`
  - 実績紹介詳細: `/case/[id]`
- お知らせ: `/news`
  - お知らせ詳細: `/news/[id]`
- お問い合わせ: `/contact`
  - 入力
  - 確認
  - 送信

## 🛠 技術スタック

### フロントエンド
- **HTMX**: サーバーサイドとのインタラクション強化
  - ページ間のスムーズな遷移と実績紹介ページの無限スクロール実装
- **GSAP**: スムーズなアニメーション実装
  - data-gsap-scroll属性によるスクロールアニメーション制御
- **Splide.js**: カルーセル実装
- **SCSS**: 保守性の高いスタイリング
- **JavaScript**:
  - モジュール管理による整理された構造
  - リアルタイムバリデーション実装
  - JSDoc による詳細なドキュメンテーション

### バックエンド
- **WordPress**: コンテンツ管理システム
- **PHP**:
  - 名前空間とクラスベースの設計
  - コンポーネントベースの開発
  - PHPDoc による詳細なドキュメンテーション

### WordPress プラグイン
- **ACF PRO**: カスタムフィールド管理
- **Classic Editor**: 従来のエディタ使用
- **Radio Buttons for Taxonomies**: タクソノミー選択UI改善
- **Yoast Duplicate Post**: 記事複製機能

## ✨ 特徴

### 1. パフォーマンス最適化
- HTMXによる部分的なページ更新
- 画像サイズの最適化

### 2. モダンなUX/UI
- GSAPを活用したスムーズなアニメーション
- レスポンシブデザイン
- SVGの最適化
  - use/symbolタグによるロゴ実装
  - background/maskによる背景実装
- color-mix関数による効率的なカラーマネジメント
  - ベースカラーからの派生色生成
  - サイト全体の統一感維持
  - 管理の簡素化

### 3. 保守性の高い設計
#### フロントエンド
- モジュール化されたJavaScript
- 詳細なドキュメンテーション
- データ属性によるアニメーション制御

#### バックエンド
- コンポーネントベースの開発
  - 再利用可能なパーツの分割管理
  - ビューファイルの簡素化
- 整理された関数管理
  - 名前空間による関数の衝突防止
  - クラスベースの設計
  - ドキュメンテーションによる使用方法の明確化
- WordPress組み込み関数との明確な区別

### 4. 管理のしやすさ
- WordPressの管理画面からコンテンツを簡単に更新可能
- カスタム投稿タイプとカスタムフィールドの活用
- 柔軟なコンテンツ構造