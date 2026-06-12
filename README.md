# PHP チンチロゲーム

## 概要
PHPのオブジェクト指向を使って作成した簡易的なチンチロゲームです。
プレイヤーと相手がサイコロを3つ振り、役に応じて勝敗を判定します。

## 使用技術
- PHP
- HTML

## 主な機能
- サイコロをランダムに3つ振る
- ピンゾロ、ゾロ目、シゴロ、ヒフミ、通常の目、役なしを判定
- プレイヤーと相手の役を比較して勝敗を表示
- サイコロ画像を表示

## 工夫した点
- 役判定と勝敗判定を別クラスに分けました
- サイコロの出目をソートして、順番に関係なくシゴロやヒフミを判定できるようにしました
- rankの変数を設定して役の強さを比較できるようにしました
- テストのために、開発段階ではvar_dumpを活用してエラーがないか確認しました

## 今後の改善点
- 画面デザインを改善する
- チップをかけるなどのゲーム要素の実装

## 実行方法
1. XAMPPを起動する
2. Apacheを起動する
3. このフォルダを `htdocs` 配下に配置する
4. ブラウザで `http://localhost/chinchiro-php/chinchiro-input.php` にアクセスする

## 画像イメージ
<p>Chinchiro-input画面</p>
<img width="773" height="462" alt="Chinchiro-input" src="https://github.com/user-attachments/assets/56ee829c-651c-4f27-9879-39e8cefb5d83" />

<p>Chinchiro-output画面</p>
<img width="449" height="494" alt="Chinchiro-result" src="https://github.com/user-attachments/assets/6042d97c-e9f4-400f-b360-303b4f865fde" />
