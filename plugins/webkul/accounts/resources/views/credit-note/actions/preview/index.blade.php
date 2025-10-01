<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en" dir="ltr">
<head>
    <meta http-equiv="Cache-control" content="no-cache">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'DejaVu Sans';
        }
        body {
            font-size: 12px;
            color: #091341;
            font-family: 'DejaVu Sans';
        }
        b, th {
            font-family: 'DejaVu Sans';
        }
        .page-content {
            padding: 12px;
        }
        .page-header {
            border-bottom: 1px solid #E9EFFC;
            text-align: center;
            font-size: 24px;
            text-transform: uppercase;
            color: #000DBB;
            padding: 24px 0;
            margin: 0;
        }
        .logo-container {
            position: absolute;
            top: 20px;
            left: 20px;
        }
        .logo-container.rtl {
            left: auto;
            right: 20px;
        }
        .logo-container img {
            max-width: 100%;
            height: auto;
        }
        .page-header b {
            display: inline-block;
            vertical-align: middle;
        }
        .small-text {
            font-size: 7px;
        }
        table {
            width: 100%;
            border-spacing: 1px 0;
            border-collapse: separate;
            margin-bottom: 16px;
        }
        table thead th {
            background-color: #E9EFFC;
            color: #000DBB;
            padding: 6px 18px;
            text-align: left;
        }
        table.rtl thead tr th {
            text-align: right;
        }
        table tbody td {
            padding: 9px 18px;
            border-bottom: 1px solid #E9EFFC;
            text-align: left;
            vertical-align: top;
        }
        table.rtl tbody tr td {
            text-align: right;
        }
        .summary {
            width: 100%;
            display: inline-block;
        }
        .summary table {
            float: right;
            width: 250px;
            padding-top: 5px;
            padding-bottom: 5px;
            background-color: #E9EFFC;
            white-space: nowrap;
        }
        .summary table.rtl {
            width: 280px;
        }
        .summary table.rtl {
            margin-right: 480px;
        }
        .summary table td {
            padding: 5px 10px;
        }
        .summary table td:nth-child(2) {
            text-align: center;
        }
        .summary table td:nth-child(3) {
            text-align: right;
        }

        .payment-info {
            clear: both;
            margin-top: 20px;
            padding: 20px;
            background-color: #E9EFFC;
            border-radius: 8px;
            font-size: 10px;
            color: #091341;
        }

        .payment-info-title {
            font-weight: 600;
            margin-bottom: 10px;
        }

        .payment-info-details {
            font-weight: 500;
        }

    </style>
</head>
<body dir="ltr">
    <div class="page">
        <!-- Header -->
        <div class="page-header">
            <b>Phiếu ghi có</b>
        </div>
        <div class="page-content">
            <!-- Credit Note Information -->
            <table class="ltr">
                <tbody>
                    <tr>
                        <td style="width: 50%; padding: 2px 18px;border:none;">
                            <b>Mã phiếu ghi có:</b>
                            <span>{{ $record->name }}</span>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 50%; padding: 2px 18px;border:none;">
                            <b>Ngày phiếu ghi có:</b>
                            <span>{{ $record->invoice_date }}</span>
                        </td>
                        <td style="width: 50%; padding: 2px 18px;border:none;">
                            <b>Ngày đến hạn:</b>
                            <span>{{ $record->invoice_date_due }}</span>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- Billing & Shipping Address -->
            <table class="ltr">
                <thead>
                    <tr>
                        <th style="width: 50%;">
                            <b>Hóa đơn từ</b>
                        </th>
                        <th style="width: 50%">
                            <b>Gửi đến</b>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="width: 50%">
                            <div>
                                <strong>{{ $record->company->name }}</strong><br>
                                {{ sprintf(
                                    "%s\n%s%s\n%s, %s %s\n%s",
                                    $record->company->partner->name ?? '',
                                    $record->company->partner->street1 ?? '',
                                    $record->company->partner->street2 ? ', ' . $record->company->partner->street2 : '',
                                    $record->company->partner->city ?? '',
                                    $record->company->partner->state ? $record->company->partner->state->name : '',
                                    $record->company->partner->zip ?? '',
                                    $record->company->partner->country ? $record->company->partner->country->name : ''
                                ) }}
                            </div>
                        </td>
                        <td style="width: 50%">
                            <div>
                                <strong>{{ $record->partner?->name }}</strong><br>
                                @if ($record->partner?->email)
                                    {{ $record->partner?->email }}<br>
                                @endif
                                @if ($record->partner?->phone)
                                    {{ $record->partner?->phone }}<br>
                                @endif

                                @php
                                    $address = sprintf(
                                        "%s\n%s%s\n%s, %s %s\n%s",
                                        $record->partner->name ?? '',
                                        $record->partner->street1 ?? '',
                                        $record->partner->street2 ? ', ' . $record->partner->street2 : '',
                                        $record->partner->city ?? '',
                                        $record->partner->state ? $record->partner->state->name : '',
                                        $record->partner->zip ?? '',
                                        $record->partner->country ? $record->partner->country->name : ''
                                    );
                                @endphp

                                @if (!empty($address))
                                    {{ $address }}
                                @endif

                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>

            <!-- Items -->
            <div class="items">
                <table class="ltr">
                    <thead>
                        <tr>
                            <th>Mã SKU</th>
                            <th>Tên sản phẩm</th>
                            <th>Giá</th>
                            <th>Số lượng</th>
                            <th>Tổng phụ</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($record->lines as $line)
                            <tr>
                                <td>{{ $line?->name ?? '-' }}</td>
                                <td>{{ $line?->name ?? '-' }}</td>
                                <td>{{ $record->currency->symbol }}{{ number_format($line->price_unit, 2) }}</td>
                                <td>{{ $line?->quantity ?? '-' }}</td>
                                <td>{{ $record->currency->symbol }}{{ number_format($line->price_total, 2) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="summary">
                <table class="ltr">
                    <tbody>
                        <tr>
                            <td>Tổng phụ</td>
                            <td>-</td>
                            <td>{{ $record->currency->symbol }} {{ number_format($record->amount_untaxed, 2) }}</td>
                        </tr>
                        <tr>
                            <td>Thuế</td>
                            <td>-</td>
                            <td>{{ $record->currency->symbol }} {{ number_format($record->amount_tax, 2) }}</td>
                        </tr>
                        <tr>
                            <td>Giảm giá</td>
                            <td>-</td>
                            <td>-{{ $record->currency->symbol }} {{ number_format($record->total_discount, 2) }}</td>
                        </tr>
                        <tr>
                            <td style="border-top: 1px solid #FFFFFF;">
                                <b>Tổng cộng</b>
                            </td>
                            <td style="border-top: 1px solid #FFFFFF;">-</td>
                            <td style="border-top: 1px solid #FFFFFF;">
                                <b>{{ $record->currency->symbol }} {{ number_format($record->amount_total, 2) }}</b>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Payment Information Section -->
            @if ($record->name)
                <div class="payment-info">
                    <div class="payment-info-title">Thông tin thanh toán</div>
                    <div>
                        Thông tin thanh toán: {{ $record->name }}
                        @if ($record?->partnerBank?->bank?->name || $record?->partnerBank?->account_number)
                            <br>
                            <span class="payment-info-details">với thông tin tài khoản:</span>
                            {{ $record?->partnerBank?->bank?->name ?? 'N/A' }}
                            ({{ $record?->partnerBank?->account_number ?? 'N/A' }})
                        @endif
                    </div>
                </div>
            @endif
        </div>
    </div>
</body>
</html>
