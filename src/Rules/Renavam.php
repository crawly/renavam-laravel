<?php


namespace Crawly\RenavamLaravel\Rules;

class Renavam
{
    public function validate(string $value): bool
    {
        $renavam = preg_replace('/[^\d]/', '', $value);
        $renavam = str_pad($renavam, 11, '0', STR_PAD_LEFT);

        $renavamSemDigito        = substr($renavam, 0, 10);
        $renavamReversoSemDigito = strrev($renavamSemDigito);

        $soma          = 0;
        $multiplicador = 2;

        for ($i = 0; $i < 10; $i++) {
            $algarismo = (int)substr($renavamReversoSemDigito, $i, 1);
            $soma      += $algarismo * $multiplicador;

            if ($multiplicador >= 9) {
                $multiplicador = 2;
            } else {
                $multiplicador++;
            }
        }

        $mod11                 = $soma % 11;
        $ultimoDigitoCalculado = 11 - $mod11;
        $ultimoDigitoCalculado = ($ultimoDigitoCalculado >= 10 ? 0 : $ultimoDigitoCalculado);
        $digitoRealInformado   = substr($renavam, -1);

        return $ultimoDigitoCalculado == $digitoRealInformado;
    }
}
