<?php

namespace App\Enums;

enum StatusPesanan: string
{
    case PENDING = 'Pending';
    case MENUNGGU_KONFIRMASI = 'Menunggu Konfirmasi';
    case DIBAYAR = 'Dibayar';
    case DIPROSES = 'Diproses';
    case DIKIRIM = 'Dikirim';
    case SELESAI = 'Selesai';
    case DIBATALKAN = 'Dibatalkan';

    public function getLabel(): string
    {
        return $this->value;
    }

    public function getColor(): string
    {
        return match ($this) {
            self::PENDING              => 'secondary',
            self::MENUNGGU_KONFIRMASI => 'warning',
            self::DIBAYAR             => 'info',
            self::DIPROSES            => 'primary',
            self::DIKIRIM             => 'purple',
            self::SELESAI             => 'success',
            self::DIBATALKAN          => 'danger',
        };
    }

    /**
     * Digunakan untuk select option.
     */
    public static function values(): array
    {
        return array_map(
            fn ($case) => $case->value,
            self::cases()
        );
    }

    /**
     * Status yang bisa dipilih oleh pembeli (jika ada).
     * Biasanya pembeli hanya bisa membatalkan pesanan saat Pending.
     */
    public static function buyerOptions(): array
    {
        return [
            self::PENDING->value,
            self::DIBATALKAN->value,
        ];
    }

    /**
     * Status yang bisa dipilih admin.
     */
    public static function adminOptions(): array
    {
        return self::values();
    }

    /**
     * Status yang dianggap "aktif" (belum selesai).
     */
    public static function active(): array
    {
        return [
            self::PENDING->value,
            self::MENUNGGU_KONFIRMASI->value,
            self::DIBAYAR->value,
            self::DIPROSES->value,
            self::DIKIRIM->value,
        ];
    }
}
